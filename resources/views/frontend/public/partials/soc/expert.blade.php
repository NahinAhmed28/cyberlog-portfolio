{{-- SOC › Talk to the Expert (form) — content per feedback --}}
<section class="page-section bg-light" id="talk-to-expert">
    <div class="container">
        <div class="row g-5 align-items-center">

            <div class="col-lg-5">
                <p class="section-eyebrow mb-2" data-reveal>Talk to Our SOC Team</p>
                <h2 class="cl-soc-h2 mb-3" data-reveal>Need <span class="grad-text">SOC Support?</span></h2>
                <p class="text-muted mb-4" data-reveal>
                    Discuss your SOC requirement with Cyberlog. We can help with SOC implementation,
                    SIEM monitoring, alert triage, threat detection, and incident response support.
                </p>
                <ul class="list-unstyled" data-reveal>
                    <li class="mb-2 text-muted"><i class="fas fa-location-dot text-primary me-2"></i>Dhaka, Bangladesh</li>
                    <li class="mb-2 text-muted"><i class="fas fa-envelope text-primary me-2"></i><a class="link-light text-decoration-none" href="mailto:info@cyberlog.bd">info@cyberlog.bd</a></li>
                    <li class="mb-2 text-muted"><i class="fas fa-phone text-primary me-2"></i>+880 1357-699084</li>
                </ul>
            </div>

            <div class="col-lg-7" data-reveal>
                <div class="cl-expert-card">
                    {{-- TODO: wire submit to a contact handler --}}
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Your Name *"></div>
                            <div class="col-md-6"><input class="form-control" type="text" placeholder="Company Name"></div>
                            <div class="col-md-6"><input class="form-control" type="email" placeholder="Work Email *"></div>
                            <div class="col-md-6"><input class="form-control" type="tel" placeholder="Phone Number"></div>
                            <div class="col-12">
                                <select class="form-select">
                                    <option selected disabled>Coverage Needed…</option>
                                    <option>SOC Implementation</option>
                                    <option>Fully Managed SOC</option>
                                    <option>Co-managed SOC</option>
                                    <option>SIEM Monitoring</option>
                                    <option>Incident Response Support</option>
                                    <option>Not Sure Yet</option>
                                </select>
                            </div>
                            <div class="col-12"><textarea class="form-control" rows="4" placeholder="Tell Us About Your Environment"></textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-xl text-white fw-bold w-100" type="submit"><i class="fas fa-headset me-1"></i> Talk to an Expert</button></div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

@push('styles')
<style>
    .cl-expert-card {
        background: linear-gradient(160deg, #0b1430, #0a1126) padding-box,
                    linear-gradient(120deg, var(--blue), #6f5bff) border-box;
        border: 1.5px solid transparent; border-radius: 16px; padding: 1.85rem;
        box-shadow: 0 30px 80px rgba(5, 20, 60, 0.5);
    }
</style>
@endpush
