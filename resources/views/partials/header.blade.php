{{-- Top Bar --}}
<div class="header-top">
    <div class="container header-top-inner">

        <div class="header-top-left">
            <a href="mailto:ipr@blueinkk.com">
                <span class="top-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z" opacity="0"></path>
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>
                </span>
                ipr@blueinkk.com
            </a>

            <a href="tel:+91-9958000637">
                <span class="top-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </span>
                +91-9958000637
            </a>
        </div>

        <div class="header-top-right">
            <span class="top-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="9"></circle>
                    <path d="M12 7v5l3 3"></path>
                </svg>
            </span>
            09:00 AM - 06:00 PM (Mon - Fri)
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
