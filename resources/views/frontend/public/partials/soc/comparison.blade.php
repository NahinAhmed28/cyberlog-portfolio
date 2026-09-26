
@php
$rows = content_items('soc_comparison_rows');
@endphp

<section class="page-section" id="comparison">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>{{ content('soc_comparison', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-2" data-reveal>{{ content('soc_comparison', 'heading') }}</h2>
        <div class="cl-cmp-wrap mt-5" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle cl-compare cl-cmp mb-0">
                    <thead>
                        <tr>
                            <th>{{ content('soc_comparison', 'th_text') }}</th>
                         
                            <th>{{ content('soc_comparison', 'th_text_2') }}</th>
                            <th>{{ content('soc_comparison', 'th_text_3') }}</th>
                            <th>{{ content('soc_comparison', 'th_text_4') }}</th>
                            <th>{{ content('soc_comparison', 'th_text_5') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $r)
                            <tr class="{{ $r['hl'] ? 'cl-row-highlight' : '' }}">
                                <td class="fw-semibold">
                                    @if ($r['hl'])</i>@endif{{ $r['model'] }}
                                </td>
                              
                                <td>{{ $r['setup'] }}</td>
                                <td>{{ $r['mttr'] }}</td>
                                <td>{{ $r['stopped'] }}</td>
                                <td>{{ $r['sla'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-cmp-wrap {
        border-radius: 16px; overflow: hidden;
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
    .cl-cmp { --bs-table-bg: transparent; }
    .cl-cmp thead th {
        background: #142b55 !important;
        border-color: rgba(109, 156, 255, .24) !important;
        color: #ffffff !important;
        font-family: 'IBM Plex Mono', monospace;
        font-size: .74rem;
        font-weight: 800;
        letter-spacing: .065em;
        text-transform: uppercase;
        text-shadow: 0 0 12px rgba(255, 255, 255, .22);
    }
    .cl-cmp td, .cl-cmp th { padding: 1rem 1.25rem; white-space: nowrap; }
</style>
@endpush
