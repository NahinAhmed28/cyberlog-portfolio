@php($d = $block->data)
<section class="page-section cl-managed-section cl-managed-{{ $block->type }}" id="{{ $block->anchor }}">
<div class="container">
@if($d['eyebrow'] ?? '')<p class="section-eyebrow">{{ $d['eyebrow'] }}</p>@endif
@if($d['heading'] ?? '')<h2 class="page-section-heading mb-4">{{ $d['heading'] }}</h2>@endif
@if($d['description'] ?? '')<p class="lead text-muted">{{ $d['description'] }}</p>@endif
@if($d['image'] ?? '')<img src="{{ asset($d['image']) }}" alt="{{ $d['image_alt'] ?? '' }}" class="img-fluid mb-4" style="max-height:420px;object-fit:contain">@endif
@if($d['video'] ?? '')<video src="{{ asset($d['video']) }}" controls preload="metadata" class="w-100 mb-4"></video>@endif
@if($d['body'] ?? '')<div class="mb-4">{!! \App\Content\SafeContent::html($d['body']) !!}</div>@endif
@if($block->type === 'comparison')<div class="table-responsive"><table class="table table-dark"><tbody>@endif
@if($block->type !== 'comparison')<div @class(['row g-4', 'd-flex flex-wrap' => $block->type === 'logos'])>@endif
@foreach($d['items'] ?? [] as $item)
@continue(empty($item['visible']))
@if($block->type === 'comparison')<tr><th>{{ $item['heading'] }}</th><td>{{ $item['description'] }}</td><td>{{ $item['value'] }}</td></tr>
@elseif($block->type === 'faq')<div class="col-12"><details class="border rounded p-3"><summary>{{ $item['heading'] }}</summary><p class="mt-3">{{ $item['description'] }}</p></details></div>
@elseif($block->type === 'logos')<div class="cl-client-logo {{ ! empty($item['light_background']) ? 'cl-client-logo--light' : '' }}"><img src="{{ asset($item['image']) }}" alt="{{ $item['image_alt'] ?: $item['heading'] }}"></div>
@else<div class="col-md-6 col-lg-4"><article class="border rounded p-4 h-100">
@if($item['image'] ?? '')<img src="{{ asset($item['image']) }}" alt="{{ $item['image_alt'] ?? '' }}" class="img-fluid mb-3 {{ ! empty($item['light_background']) ? 'bg-light rounded p-2' : '' }}" style="height:88px;width:100%;object-fit:contain">@endif
@if($item['icon'] ?? '')<i class="{{ $item['icon'] }} mb-3" aria-hidden="true"></i>@endif
@if($item['value'] ?? '')<p class="display-6">{{ $item['value'] }}</p>@endif
@if($block->type === 'steps')<p class="section-eyebrow">Step {{ $loop->iteration }}</p>@endif
<h3 class="h5">{{ $item['heading'] }}</h3><p>{{ $item['description'] }}</p>
@if($block->type === 'testimonials')<p aria-label="Rating">{{ max(0, min(5, $item['rating'] ?? 0)) }} / 5</p>@endif
@if($item['url'] ?? '')<a href="{{ $item['url'] }}">{{ $item['heading'] }}</a>@endif
</article></div>@endif
@endforeach
@if($block->type !== 'comparison')</div>@endif
@if($block->type === 'comparison')</tbody></table></div>@endif
<div class="d-flex flex-wrap gap-3 mt-4">@foreach($d['buttons'] ?? [] as $button)@if(! empty($button['visible']))<a class="btn btn-primary" href="{{ $button['url'] }}">{{ $button['label'] }}</a>@endif @endforeach</div>
</div></section>
