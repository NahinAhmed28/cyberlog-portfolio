
@php
    $rows = content_items('vapt_matrix_rows');
@endphp

<section class="page-section cl-vapt-matrix-section" id="matrix">
    <div class="container">
        <p class="section-eyebrow text-center mb-2" data-reveal>{{ content('vapt_matrix', 'paragraph') }}</p>
        <h2 class="page-section-heading text-center text-secondary mb-5" data-reveal>{{ content('vapt_matrix', 'heading') }}</h2>

        <div class="cl-vapt-matrix-wrap" data-reveal>
            <div class="table-responsive">
                <table class="table align-middle cl-vapt-matrix mb-0">
                    <thead>
                        <tr>
                            <th class="text-start">{{ content('vapt_matrix', 'th_text') }}</th>
                            <th>{{ content('vapt_matrix', 'th_text_2') }}</th>
                            <th>{{ content('vapt_matrix', 'th_text_3') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rows as $row)
                            <tr>
                                <td class="text-start fw-semibold">{{ $row[0] }}</td>
                                <td class="cl-vapt-basic">{{ $row[1] }}</td>
                                <td class="cl-vapt-us"><i class="{{ content('vapt_matrix', 'icon') }}"></i>{{ $row[2] }}</td>
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
    .cl-vapt-matrix-section {
        background:
            radial-gradient(720px 380px at 12% 8%, rgba(109, 156, 255, .08), transparent 62%),
            linear-gradient(180deg, rgba(7, 17, 31, .98), rgba(5, 12, 23, .98));
    }
    .cl-vapt-matrix-wrap {
        width: 100%;
        max-width: 1080px;
        margin-inline: auto;
        overflow: hidden;
        border-radius: 10px;
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--red-soft), var(--blue-bright)) border-box;
        border: 1.5px solid transparent;
        box-shadow: 0 28px 76px rgba(5, 20, 60, 0.5);
    }
    .cl-vapt-matrix { width: 100%; min-width: 720px; --bs-table-bg: transparent; color: var(--text); }
    .cl-vapt-matrix thead th {
        padding: 1rem 1.25rem;
        color: #ffffff !important;
        background: linear-gradient(90deg, #142b55, #193765) !important;
        border-color: rgba(109, 156, 255, .24) !important;
        font-family: 'Chakra Petch', sans-serif;
        font-size: 1rem;
        font-weight: 800;
        text-shadow: 0 0 12px rgba(255, 255, 255, .22);
    }
    .cl-vapt-matrix thead th:last-child { color: #ffffff !important; }
    .cl-vapt-matrix td { padding: 1rem 1.25rem; border-color: var(--line); vertical-align: top; }
    .cl-vapt-basic { color: var(--muted); }
    .cl-vapt-us { color: var(--white); background: rgba(228, 31, 61, .08); }
    .cl-vapt-us .fa-circle-check { color: var(--warm-soft); }
</style>
@endpush
