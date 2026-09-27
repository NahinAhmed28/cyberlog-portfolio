<?php

namespace App\Http\Controllers\Admin;

use App\Content\SafeContent;
use App\Http\Controllers\Controller;
use App\Models\NavigationItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class NavigationController extends Controller
{
    public function index()
    {
        $items = NavigationItem::whereNull('parent_id')->with('children')->orderBy('sort_order')->orderBy('id')->get();

        return view('admin.navigation.index', compact('items'));
    }

    public function create(Request $request)
    {
        $parent = $request->filled('parent_id') ? NavigationItem::whereNull('parent_id')->where('type', 'dropdown')->findOrFail($request->integer('parent_id')) : null;

        return $this->form(new NavigationItem(['is_visible' => true, 'type' => 'link', 'sort_order' => 100, 'url' => '/', 'parent_id' => $parent?->id]));
    }

    public function move(Request $request, NavigationItem $navigation)
    {
        $request->validate(['direction' => ['required', Rule::in(['up', 'down'])]]);
        DB::transaction(function () use ($navigation, $request) {
            $siblings = NavigationItem::where('parent_id', $navigation->parent_id)->orderBy('sort_order')->orderBy('id')->lockForUpdate()->get()->all();
            $index = array_search($navigation->id, array_column($siblings, 'id'));
            $target = $index + ($request->input('direction') === 'up' ? -1 : 1);
            if (isset($siblings[$target])) {
                [$siblings[$index], $siblings[$target]] = [$siblings[$target], $siblings[$index]];
                foreach ($siblings as $order => $item) {
                    $item->update(['sort_order' => ($order + 1) * 10]);
                }
            }
        });

        return back()->with('status', 'Menu order updated.');
    }

    public function edit(NavigationItem $navigation)
    {
        return $this->form($navigation);
    }

    private function form(NavigationItem $item)
    {
        $parents = NavigationItem::whereNull('parent_id')->where('type', 'dropdown')->where('id', '!=', $item->id ?? 0)->orderBy('sort_order')->get();

        return view('admin.navigation.edit', compact('item', 'parents'));
    }

    public function store(Request $request)
    {
        return $this->save($request, new NavigationItem);
    }

    public function update(Request $request, NavigationItem $navigation)
    {
        return $this->save($request, $navigation);
    }

    private function save(Request $request, NavigationItem $item)
    {
        $data = $request->validate([
            'label' => ['required', 'string', 'max:255'],
            'url' => ['nullable', 'string', 'max:2048', fn ($attribute, $value, $fail) => SafeContent::safeUrl($value) ?: $fail('Enter a valid website, page, email or telephone link.')],
            'parent_id' => ['nullable', 'integer', Rule::exists('navigation_items', 'id')->whereNull('parent_id')->whereNull('deleted_at')->where('type', 'dropdown')],
            'type' => ['required', Rule::in(['link', 'dropdown', 'button', 'divider'])],
            'sort_order' => ['required', 'integer', 'between:0,1000000'],
            'is_visible' => ['required', 'boolean'], 'new_tab' => ['required', 'boolean'],
        ]);
        validator($data, [
            'parent_id' => [function ($attribute, $value, $fail) use ($item, $data) {
                if ($value && ((int) $value === $item->id || $item->children()->exists() || in_array($data['type'], ['dropdown', 'button']))) {
                    $fail('Submenus must be links or dividers and cannot contain another menu.');
                }
            }],
            'type' => [function ($attribute, $value, $fail) use ($item, $data) {
                if (($item->children()->exists() && $value !== 'dropdown') || ($value === 'divider' && empty($data['parent_id']))) {
                    $fail('Keep a dropdown for existing submenus. Dividers belong inside a dropdown.');
                }
            }],
        ])->validate();
        $data['label'] = strip_tags($data['label']);
        $data['url'] = $data['url'] ?: '#';
        $item->fill($data)->save();

        return redirect()->route('admin.navigation.index')->with('status', 'Navigation saved.');
    }

    public function destroy(NavigationItem $navigation)
    {
        DB::transaction(function () use ($navigation) {
            $navigation->children()->delete();
            $navigation->delete();
        });

        return back()->with('status', 'Menu item deleted.');
    }
}
