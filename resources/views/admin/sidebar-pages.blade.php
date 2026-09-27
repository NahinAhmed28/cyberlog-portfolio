@php($sidebar = app(\App\Content\AdminNavigation::class)->items())
<div class="admin-nav-heading">Public navigation</div>
@foreach($sidebar['items'] as $item)
    @if(isset($item['children']))
        <details class="admin-nav-group" @if($item['active']) open @endif>
            <summary>{{ $item['label'] }}</summary>
            @foreach($item['children'] as $child)
                @if(isset($child['divider']))
                    <hr class="my-2 mx-3">
                @else
                    @include('admin.sidebar-page-link', ['item' => $child])
                @endif
            @endforeach
        </details>
    @else
        @include('admin.sidebar-page-link', ['item' => $item])
    @endif
@endforeach
@if($sidebar['otherPages']->isNotEmpty())
    <details class="admin-nav-group" @if($sidebar['otherPages']->contains('slug', $sidebar['current'])) open @endif>
        <summary>Other pages</summary>
        @foreach($sidebar['otherPages'] as $navPage)
            @include('admin.sidebar-page-link', ['item' => ['label' => $navPage->title, 'page' => $navPage, 'active' => $sidebar['current'] === $navPage->slug, 'url' => route('admin.pages.show', $navPage)]])
        @endforeach
    </details>
@endif
