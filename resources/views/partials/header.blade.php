   {{-- Top Bar --}}
    <div class="header-top">
        <div class="container header-top-inner">
            <div class="header-top-left">
                <a href="mailto:info@blueinkkglobal.com">
                    info@blueinkkglobal.com
                </a>
                <a href="tel:+910000000000">
                    +91 00000 00000
                </a>
            </div>
            <div class="header-top-right">
                <a href="#">
                    Client Login
                </a>

                <a href="#">
                    Track Application
                </a>
            </div>

        </div>
    </div>



{{-- =========================================================
    MAIN HEADER
========================================================= --}}
<header class="site-header">

    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">

            {{-- Logo --}}
            <a href="{{ url('/') }}" class="navbar-brand brand-logo">
                <img
                    src="{{ asset('images/logo.webp') }}"
                    alt="Blueinkk Global">
            </a>

            {{-- Mobile Toggle --}}
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>


            {{-- Navigation --}}
            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    {{-- Home --}}
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link">
                            Home
                        </a>
                    </li>


                    {{-- ABOUT --}}
                    <li class="nav-item dropdown mega-dropdown">

                        <a
                            href="#"
                            class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            About
                        </a>


                        {{-- Mega Menu --}}
                        <div class="dropdown-menu mega-menu">

                            <div class="container">

                                <div class="row g-4">

                                    {{-- Column 1 --}}
                                    <div class="col-lg-4">

                                        <h6 class="mega-title">
                                            About Us
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Company Overview
                                        </a>

                                        <a href="#" class="mega-link">
                                            Our Story
                                        </a>

                                        <a href="#" class="mega-link">
                                            Our Mission
                                        </a>

                                        <a href="#" class="mega-link">
                                            Leadership Team
                                        </a>

                                    </div>


                                    {{-- Column 2 --}}
                                    <div class="col-lg-4">

                                        <h6 class="mega-title">
                                            Our Expertise
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Trademark
                                        </a>

                                        <a href="#" class="mega-link">
                                            Copyright
                                        </a>

                                        <a href="#" class="mega-link">
                                            Patent
                                        </a>

                                        <a href="#" class="mega-link">
                                            Design Registration
                                        </a>

                                    </div>


                                    {{-- Column 3 --}}
                                    <div class="col-lg-4">

                                        <h6 class="mega-title">
                                            Quick Links
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Resources
                                        </a>

                                        <a href="#" class="mega-link">
                                            Blog
                                        </a>

                                        <a href="#" class="mega-link">
                                            FAQs
                                        </a>

                                        <a href="#" class="mega-link">
                                            Contact Us
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </li>


                    {{-- SERVICES --}}
                    <li class="nav-item dropdown mega-dropdown">

                        <a
                            href="#"
                            class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Services
                        </a>


                        <div class="dropdown-menu mega-menu">

                            <div class="container">

                                <div class="row g-4">

                                    <div class="col-lg-3">

                                        <h6 class="mega-title">
                                            Trademark
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Trademark Registration
                                        </a>

                                        <a href="#" class="mega-link">
                                            Trademark Search
                                        </a>

                                        <a href="#" class="mega-link">
                                            Trademark Renewal
                                        </a>

                                    </div>


                                    <div class="col-lg-3">

                                        <h6 class="mega-title">
                                            Copyright
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Copyright Registration
                                        </a>

                                        <a href="#" class="mega-link">
                                            Copyright Search
                                        </a>

                                        <a href="#" class="mega-link">
                                            Copyright Renewal
                                        </a>

                                    </div>


                                    <div class="col-lg-3">

                                        <h6 class="mega-title">
                                            Patent
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Patent Registration
                                        </a>

                                        <a href="#" class="mega-link">
                                            Patent Search
                                        </a>

                                        <a href="#" class="mega-link">
                                            Patent Renewal
                                        </a>

                                    </div>


                                    <div class="col-lg-3">

                                        <h6 class="mega-title">
                                            Design
                                        </h6>

                                        <a href="#" class="mega-link">
                                            Design Registration
                                        </a>

                                        <a href="#" class="mega-link">
                                            Design Search
                                        </a>

                                        <a href="#" class="mega-link">
                                            Design Renewal
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </li>


                    {{-- BLOG --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Blog
                        </a>
                    </li>


                    {{-- CONTACT --}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Contact
                        </a>
                    </li>


                    {{-- CTA --}}
                    <li class="nav-item ms-lg-3">

                        <a href="#" class="btn header-btn">
                            Get Started
                        </a>

                    </li>

                </ul>

            </div>

        </div>
    </nav>

</header>
