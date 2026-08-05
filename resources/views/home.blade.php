@extends('layouts.app')
@section('title', 'Blueinkk Global | Global Trademark Solutions')
@section('meta_description', 'Blueinkk Global provides professional trademark registration, search, renewal and global brand protection services.')
@section('content')
{{-- =========================================================
     SIMPLE HERO SECTION
========================================================= --}}
{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="hero-section">

    <div class="container">

        <div class="row align-items-center hero-row">

            {{-- =================================================
                 LEFT CONTENT
            ================================================= --}}
            <div class="col-lg-6">

                <div class="hero-content">

                    <span class="hero-tag">
                        Global Trademark & IPR Solutions
                    </span>

                    <h1 class="hero-title">
                        Protect Your Brand.
                        <span>Grow Globally.</span>
                    </h1>

                    <p class="hero-description">
                        Professional trademark registration, brand protection
                        and intellectual property services for businesses
                        expanding across India and international markets.
                    </p>

                    {{-- =================================================
                         HERO STATS
                    ================================================= --}}
                    <div class="hero-stats">

                        <div class="hero-stat-item">
                            <strong>40,000+</strong>
                            <span>Clients Helped</span>
                        </div>

                        <div class="hero-stat-item">
                            <strong>15+</strong>
                            <span>Years Legal Experience</span>
                        </div>

                        <div class="hero-stat-item">
                            <strong>100+</strong>
                            <span>Countries</span>
                        </div>

                    </div>

                    {{-- =================================================
                         HERO BUTTONS
                    ================================================= --}}
                    <div class="hero-actions">

                        <button
                            type="button"
                            class="btn hero-primary-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">

                            Get Free Consultation

                            <i class="bi bi-arrow-right"></i>

                        </button>

                        <a
                            href="{{ url('/countries') }}"
                            class="btn hero-outline-btn">

                            View All Countries

                        </a>

                    </div>

                </div>

            </div>

            {{-- =================================================
                 RIGHT SVG IMAGE
            ================================================= --}}
            <div class="col-lg-6 mt-4 mt-lg-0">

                <div class="hero-image-wrapper">

                    <img
                        src="{{ asset('images/tm-hero.webp') }}"
                        alt="Global trademark and intellectual property protection"
                        class="hero-image">

                </div>

            </div>

        </div>

    </div>

</section>
{{-- =========================================================
     TRUSTED CLIENTS
========================================================= --}}
<section class="clients-section" id="clients">

    <div class="container">

        {{-- Section Heading --}}
        <h2 class="clients-title mb-4 h4 fw-bold">
            Brands That Trust BlueInkk
        </h2>

        {{-- Logo Slider --}}
        <div class="splide clients-slider">

            <div class="splide__track">

                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/air-arabia.webp') }}" alt="Client 1">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/ajay-devgn-film.webp') }}" alt="Client 2">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/anil-sharma-productions.webp') }}" alt="Client 3">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/haldiram.webp') }}" alt="Client 4">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/lotus-herbals.webp') }}" alt="Client 5">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/micromax.webp') }}" alt="Client 6">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/milk-basket.webp') }}" alt="Client 7">
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/ntpc.webp') }}" alt="Client 8">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/premanand-ji-maharaj.webp') }}" alt="Client 8">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/steelbird-international.webp') }}" alt="Client 8">
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="client-logo">
                            <img src="{{ asset('images/clients/wakefit.webp') }}" alt="Client 8">
                        </div>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>
<section class="award-section py-5">
    <div class="container">
        <div class="award-card">
            <div class="row align-items-center g-0">
                <!-- Award Image -->
                <div class="col-lg-5">
                    <div class="award-image-wrap">
                        <img
                            src="{{ asset('images/trademark-law-firm-award.webp') }}"
                            alt="Trademark Law Firm of the Year Award - Blue Inkk"
                            class="img-fluid award-image"
                        >

                        <div class="award-year-badge">
                            <span>Winner</span>
                            <strong>2026</strong>
                        </div>
                    </div>
                </div>

                <!-- Award Content -->
                <div class="col-lg-7">
                    <div class="award-content">
                        <span class="award-eyebrow">
                            <i class="bi bi-award-fill"></i>
                            Award & Recognition
                        </span>

                        <h2>Trademark Law Firm of the Year</h2>

                        <p>
                            Blue Inkk was recognised as
                            <strong>Trademark Law Firm of the Year</strong>
                            at the 28th IIPLA 2026 Conference, organised by the
                            International Intellectual Property Law Association
                            (IIPLA).
                        </p>

                        <p>
                            The conference was held in Dubai on
                            <strong>19–20 January 2026</strong> at the
                            Radisson Blu Hotel, Dubai Waterfront, recognising
                            Blue Inkk’s excellence in trademark prosecution,
                            enforcement, and strategic advisory services.
                        </p>

                        <div class="award-meta">
                            <div class="award-meta-item">
                                <span class="award-meta-icon">
                                    <i class="bi bi-calendar-event"></i>
                                </span>

                                <div>
                                    <small>Event Date</small>
                                    <strong>19–20 January 2026</strong>
                                </div>
                            </div>

                            <div class="award-meta-item">
                                <span class="award-meta-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>

                                <div>
                                    <small>Location</small>
                                    <strong>Dubai, UAE</strong>
                                </div>
                            </div>
                        </div>

                        <!-- <a href="#" class="btn award-btn">
                            View Recognition
                            <i class="bi bi-arrow-up-right"></i>
                        </a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- =========================================================
     SERVICES
========================================================= --}}
<section
    class="services-section py-5"
    id="services">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mt-2">
                Complete Trademark Solutions
            </h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Everything you need to protect, manage and grow your brand
                in India and international markets.
            </p>

        </div>

<div class="row g-4">

    {{-- Service 1 --}}
    <div class="col-lg-3 col-md-6">
        <div class="service-card h-100">

            <div class="service-icon">
                <i class="bi bi-patch-check"></i>
            </div>

            <h4>Trademark </h4>

            <p>
                Secure your brand name, logo and identity with professional
                trademark registration and filing support.
            </p>

            <a href="#">
                Learn More
                <i class="bi bi-arrow-right ms-1"></i>
            </a>

        </div>
    </div>


    {{-- Service 2 --}}
    <div class="col-lg-3 col-md-6">
        <div class="service-card h-100">

            <div class="service-icon">
                <i class="bi bi-c-circle"></i>
            </div>

            <h4>Copyright</h4>

            <p>
                Protect your original content, artwork, software and creative
                works through reliable copyright services.
            </p>

            <a href="#">
                Learn More
                <i class="bi bi-arrow-right ms-1"></i>
            </a>

        </div>
    </div>


    {{-- Service 3 --}}
    <div class="col-lg-3 col-md-6">
        <div class="service-card h-100">

            <div class="service-icon">
                <i class="bi bi-bezier2"></i>
            </div>

            <h4>Design</h4>

            <p>
                Safeguard the unique visual appearance, shape and design of
                your products with design registration support.
            </p>

            <a href="#">
                Learn More
                <i class="bi bi-arrow-right ms-1"></i>
            </a>

        </div>
    </div>


    {{-- Service 4 --}}
    <div class="col-lg-3 col-md-6">
        <div class="service-card h-100">

            <div class="service-icon">
                <i class="bi bi-lightbulb"></i>
            </div>

            <h4>Patent</h4>

            <p>
                Protect your inventions and innovative ideas with professional
                patent filing, prosecution and advisory services.
            </p>

            <a href="#">
                Learn More
                <i class="bi bi-arrow-right ms-1"></i>
            </a>

        </div>
    </div>

</div>

    </div>

</section>
{{-- =========================================================
     ABOUT SECTION
========================================================= --}}
<section class="about-section" id="about">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Left Image --}}
            <div class="col-lg-6">

                <div class="about-image-wrap">

                    <img
                        src="{{ asset('images/about-us.webp') }}"
                        alt="Blue Inkk intellectual property legal team"
                        class="about-image"
                        loading="lazy">

                    <div class="about-image-content">

                        <strong>360° IP Protection</strong>

                        <span>
                            Creation, protection, enforcement and monetisation
                            of intellectual property.
                        </span>

                    </div>

                </div>

                <div class="about-stats">

                    <div>
                        <strong>40,000+</strong>
                        <span>Clients Served</span>
                    </div>

                    <div>
                        <strong>100+</strong>
                        <span>Countries</span>
                    </div>

                    <div>
                        <strong>Top 15</strong>
                        <span>Domestic IP Firms</span>
                    </div>

                </div>

            </div>

            {{-- Right Content --}}
            <div class="col-lg-6">

                <div class="about-content">

                    <span class="fw-bold">
                        About BlueInkk
                    </span>

                    <h2>
                        Strategic IP Protection for
                        <span>Modern Businesses</span>
                    </h2>

                    <p class="about-lead">
                        BlueInkk is a full-service Intellectual Property law
                        firm delivering strategic and business-driven IP
                        solutions to innovators across the globe.
                    </p>

                    <p>
                        Founded in October 2019, we follow a 360° IP Protection
                        Approach covering creation, protection, enforcement and
                        monetisation of intellectual property.
                    </p>

                    <p>
                        Our team handles domestic and international trademark
                        filings, Madrid Protocol applications, renewals,
                        portfolio management, enforcement and advisory across
                        more than 100 countries.
                    </p>

                    <div class="about-points">

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Global Trademark Filing
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            End-to-End IP Support
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Business-Focused Strategy
                        </div>

                        <div>
                            <i class="bi bi-check-circle-fill"></i>
                            Transparent Legal Process
                        </div>

                    </div>

                    <div class="about-actions">

                        <a
                            href="{{ url('/about-us') }}"
                            class="btn about-btn">

                            Know More

                            <i class="bi bi-arrow-right"></i>

                        </a>

                        <button
                            type="button"
                            class="btn about-link"
                            data-bs-toggle="modal"
                            data-bs-target="#enquiryModal">

                            Talk to an IP Expert

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
     FOUNDER MESSAGE
========================================================= --}}
<section class="founder-section" id="founder">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Founder Image --}}
            <div class="col-lg-5">

                <div class="founder-image-wrap">

                    <img
                        src="{{ asset('images/founder.webp') }}"
                        alt="Founder - Blue Inkk"
                        class="founder-image">

                </div>

            </div>

            {{-- Founder Content --}}
            <div class="col-lg-7">
                <div class="founder-content">
                    <span class="fw-bold">
                        Founder’s Message
                    </span>
                    <h2>
                        A Vision Built Around
                        <span>Innovation & Protection</span>
                    </h2>
                    <div class="founder-quote">

                        <i class="bi bi-quote"></i>

                    </div>
                    <p class="founder-lead">
                        At BlueInkk, we see intellectual property as the power
                        to innovate and the commitment to protect that
                        innovation.
                    </p>
                    <p>
                        Our vision is to deliver globally benchmarked IP
                        solutions with precision, integrity and strategic
                        clarity.

                    </p>

                    <p>

                        Trusted by a growing global clientele, we remain focused
                        on one purpose — protecting innovation, strengthening
                        brands and enabling long-term value across
                        jurisdictions.

                    </p>

                    <div class="founder-footer">

                        <div>

                            <h5>
                                Mayank Goel
                            </h5>

                            <span>
                                Founder & Managing Partner
                            </span>

                        </div>

                        <!-- <a
                            href="{{ url('/about-us') }}"
                            class="btn hero-outline-btn">

                            Read More

                            <i class="bi bi-arrow-right"></i>

                        </a> -->

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
{{-- =========================================================
     WHY US
========================================================= --}}
<section class="why-us-section py-5"
    id="why-us">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold mt-2">
                Why Businesses Choose Blueinkk Global
            </h2>

        </div>
        <div class="row g-4">

            <div class="col-lg-4">

                <div class="why-card">

                    <i class="bi bi-person-check"></i>

                    <h4>
                        Expert Guidance
                    </h4>

                    <p>
                        Get practical guidance throughout your trademark
                        journey from search to registration and beyond.
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="why-card">

                    <i class="bi bi-globe"></i>

                    <h4>
                        Global Reach
                    </h4>

                    <p>
                        Build and protect your brand not only locally but
                        across international markets.
                    </p>

                </div>

            </div>


            <div class="col-lg-4">

                <div class="why-card">

                    <i class="bi bi-headset"></i>

                    <h4>
                        Dedicated Support
                    </h4>

                    <p>
                        We focus on clear communication and reliable support
                        throughout your service journey.
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>
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
                    data-bs-toggle="modal" data-bs-target="#enquiryModal">
                        Get Started
                    </a>

                </div>

            </div>

        </div>

    </section>
@endsection