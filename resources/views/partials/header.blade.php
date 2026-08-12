{{-- Top Bar --}}
<div class="header-top">
    <div class="container header-top-inner">
        <div class="header-top-left">
            <a href="mailto:global.ipr@blueinkk.com">
                <span class="top-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z" opacity="0"></path>
                        <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                        <path d="M3 7l9 6 9-6"></path>
                    </svg>
                </span>
                global.ipr@blueinkk.com
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
                <span class="social-label">Follow Us</span>
                <div class="top-socials">
                    <!-- LinkedIn -->
                    <a href="#" aria-label="LinkedIn" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M6.5 8.5H3V21h3.5V8.5ZM4.75 3A2.05 2.05 0 1 0 4.75 7.1 2.05 2.05 0 0 0 4.75 3ZM21 13.9c0-3.77-2.01-5.52-4.69-5.52-2.16 0-3.13 1.19-3.67 2.03V8.5H9.15V21h3.49v-6.19c0-1.63.31-3.21 2.33-3.21 1.99 0 2.02 1.87 2.02 3.32V21H21v-7.1Z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="#" aria-label="Facebook" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.87.24-1.46 1.5-1.46h1.7V3.96c-.29-.04-1.29-.13-2.45-.13-2.43 0-4.1 1.49-4.1 4.22V10H7.4v3h2.75v8h3.35Z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="#" aria-label="Instagram" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="5" ry="5" />
                            <circle cx="12" cy="12" r="4.2" />
                            <circle class="instagram-dot" cx="17.4" cy="6.6" r="1" />
                        </svg>
                    </a>

                    <!-- YouTube -->
                    <a href="#" aria-label="YouTube" target="_blank" rel="noopener">
                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21.6 7.2a2.8 2.8 0 0 0-2-2C17.8 4.7 12 4.7 12 4.7s-5.8 0-7.6.5a2.8 2.8 0 0 0-2 2A29 29 0 0 0 1.9 12a29 29 0 0 0 .5 4.8 2.8 2.8 0 0 0 2 2c1.8.5 7.6.5 7.6.5s5.8 0 7.6-.5a2.8 2.8 0 0 0 2-2 29 29 0 0 0 .5-4.8 29 29 0 0 0-.5-4.8ZM10 15.8V8.2l6 3.8-6 3.8Z" />
                        </svg>
                    </a>

                </div>
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
                    <li class="nav-item dropdown mega-dropdown">
                        <a
                            class="nav-link global-trademark-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="global-trademark-icon">🌐</span>
                            Global Trademark
                        </a>

                        <div class="dropdown-menu mega-menu">
                            <div class="container">

                                <div class="mega-header">
                                    <div>
                                        <span class="mega-eyebrow">GLOBAL TRADEMARK SERVICES</span>
                                        <h3>Trademark Registration by Country</h3>
                                        <p>
                                            Protect your brand across 100+ countries worldwide.
                                        </p>
                                    </div>

                                    <a href="{{ url('/trademark-registration-countries') }}" class="mega-view-all">
                                        View All Countries →
                                    </a>

                                </div>

@php
    $menuGroups = [
        'asia_pacific' => 'Asia Pacific',
        'popular_destinations' => 'Popular Destinations',
        'north_america' => 'North America',
        'europe' => 'Europe',
    ];
@endphp

<div class="row g-0">

    @foreach($menuGroups as $regionKey => $regionLabel)
        @php
            $countries = $regionKey === 'popular_destinations'
                ? $popularCountries
                : $countriesByRegion->get($regionKey, collect());
        @endphp

        @if($countries->isNotEmpty())
            <div class="col-lg-3 col-md-6">
                <div class="country-group">

                    <h4>{{ $regionLabel }}</h4>

                    @foreach($countries as $country)
                        <a
                            href="{{ route('country.show', $country->slug) }}"
                            class="mega-link"
                        >
                            @if(filled($country->country_flag))
                                <span
                                    class="fi fi-{{ strtolower($country->country_flag) }}"
                                ></span>
                            @endif

                            {{ $country->country_name }}
                        </a>
                    @endforeach

                </div>
            </div>
        @endif
    @endforeach

</div>

                            </div>
                        </div>
                    </li>
                    {{-- About Us --}}
                    <li class="nav-item">
                        <a href="{{ url('/about-us') }}" class="nav-link">
                            About Us
                        </a>
                    </li>
                    {{-- SERVICES --}}
                      <li class="nav-item">
                        <a href="{{ url('/our-services') }}" class="nav-link">
                           Our Services
                        </a>
                    </li>

                    <!-- <li class="nav-item dropdown mega-dropdown">

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

                    </li> -->
                    {{-- Our Team --}}
                    <li class="nav-item">
                       <a href="{{ url('/our-team') }}" class="nav-link">
                            Our Team
                        </a>
                    </li>
                    {{-- CONTACT --}}
                    <li class="nav-item">
                       <a href="{{ url('/contact-us') }}" class="nav-link">
                            Contact us
                        </a>
                    </li>
                    {{-- CTA --}}
                    <li class="nav-item ms-lg-3">
                        <a href="#" class="btn header-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                            Get Started
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>