<footer class="footer-section">

    {{-- CTA --}}
    <section class="footer-cta py-5">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-8 mb-3 mb-lg-0">

                    <h2 class="fw-bold mb-2">
                        Ready to Protect Your Brand?
                    </h2>

                    <p class="mb-0">
                        Get professional trademark and global brand protection
                        support from our experts.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end">

                    <a
                        href="#contact"
                        class="btn btn-light px-4 py-2"
                    >
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </section>


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
                        style="max-width: 180px;"
                    >

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
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li>
                            <a href="#about">About Us</a>
                        </li>

                        <li>
                            <a href="#why-us">Why Us</a>
                        </li>

                        <li>
                            <a href="#contact">Contact</a>
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
                            <a href="#">
                                Trademark Registration
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Trademark Search
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Trademark Renewal
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                Global Trademark Services
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
                            India
                        </li>

                        <li class="mb-3">
                            <i class="bi bi-envelope me-2"></i>
                            info@blueinkkglobal.com
                        </li>

                        <li>
                            <i class="bi bi-telephone me-2"></i>
                            +91 00000 00000
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