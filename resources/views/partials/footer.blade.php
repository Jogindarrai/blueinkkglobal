<footer class="footer-section">




    {{-- Main Footer --}}
    <div class="footer-main py-5">

        <div class="container">

            <div class="row g-4">

                {{-- About --}}
                <div class="col-lg-4 col-md-6">

                    <img
                        src="{{ asset('images/logo.webp') }}"
                        alt="Blueinkk Global"
                        class="img-fluid mb-3"
                        style="max-width: 120px;">

                    <p>
                        Blueinkk Global provides professional trademark and
                        brand protection solutions for businesses looking to
                        build and protect their brands globally.
                    </p>

                    <div class="social-links d-flex gap-2">

                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="#" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>

                        <a href="#" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>

                    </div>

                </div>


                {{-- Quick Links --}}
                <div class="col-lg-2 col-md-6">

                    <h5 class="fw-bold mb-3">
                        Quick Links
                    </h5>

                    <ul class="list-unstyled footer-links">

                        <li>
                            <a href="{{ url('/') }}">
                                <i class="bi bi-house-door me-2"></i>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/about-us') }}">
                                <i class="bi bi-info-circle me-2"></i>
                                About Us
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-team') }}">
                                <i class="bi bi-people me-2"></i>
                                Our Team
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-grid me-2"></i>
                                Our Services
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/contact-us') }}">
                                <i class="bi bi-envelope me-2"></i>
                                Contact Us
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Services --}}
                <div class="col-lg-3 col-md-6">

                    <h5 class="fw-bold mb-3">
                        Our Services
                    </h5>

                    <ul class="list-unstyled footer-links">

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-patch-check me-2"></i>
                                Trademark Registration
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-c-circle me-2"></i>
                                Copyright
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-bezier2 me-2"></i>
                                Design
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-lightbulb me-2"></i>
                                Patent
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-file-earmark-text me-2"></i>
                                Contracts &amp; Agreements
                            </a>
                        </li>

                        <li>
                            <a href="{{ url('/our-services') }}">
                                <i class="bi bi-bar-chart-line me-2"></i>
                                IP Valuation &amp; Due Diligence
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Contact --}}
                <div class="col-lg-3 col-md-6" id="contact">

                    <h5 class="fw-bold mb-3">
                        Contact Us
                    </h5>

                    <ul class="list-unstyled footer-contact">

                        <li class="mb-3">
                            <i class="bi bi-geo-alt me-2"></i>
                            G-49-50, Second Floor, Office No. 1,
                            Near Sector 16 Metro Station,
                            Block G, Sector 3,
                            Noida, Uttar Pradesh – 201301,
                            India
                        </li>

                        <li class="mb-3">
                            <i class="bi bi-envelope me-2"></i>
                            global.ipr@blueinkk.com
                        </li>

                        <li>
                            <i class="bi bi-telephone me-2"></i>
                            +91-9958000637
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>


    {{-- Copyright --}}
    <div class="footer-bottom py-3">

        <div class="container">

            <div class="row">

                <div class="col-md-6 text-center text-md-start">

                    <small>
                        © {{ date('Y') }} Blueinkk Global.
                        All Rights Reserved.
                    </small>

                </div>

                <div class="col-md-6 text-center text-md-end">

                    <small>
                        <a href="#">Privacy Policy</a>
                        <span class="mx-2">|</span>
                        <a href="#">Terms & Conditions</a>
                    </small>

                </div>

            </div>

        </div>

    </div>

</footer>

{{-- =========================================================
     ENQUIRY MODAL
========================================================= --}}
<div
    class="modal fade"
    id="enquiryModal"
    tabindex="-1"
    aria-labelledby="enquiryModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content enquiry-modal-content">
            {{-- Modal Header --}}
            <div class="modal-header">

                <div>
                    <span class="modal-small-title">
                        Get Expert Assistance
                    </span>

                    <h5
                        class="modal-title"
                        id="enquiryModalLabel">

                        Start Your Enquiry

                    </h5>

                </div>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>

            {{-- Modal Form --}}
            <div class="modal-body">
               @include('partials.enquiry-modal', [
                    'formLocation' => 'modal'
                ])
            </div>

        </div>
    </div>
</div>