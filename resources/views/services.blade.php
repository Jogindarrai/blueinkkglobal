@extends('layouts.app')

@section('title', 'Our Services | Blue Inkk Global')

@section(
    'meta_description',
    'Explore Blue Inkk Global services covering trademarks, copyright, designs, patents, agreements, IP valuation, litigation, arbitration and IP enforcement.'
)

@section('content')

{{-- =========================================
     SERVICES HERO
========================================= --}}
<section class="countries-hero">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb countries-breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li
                            class="breadcrumb-item active"
                            aria-current="page"
                        >
                            Our Services
                        </li>
                    </ol>
                </nav>

                <span class="services-hero-label">
                    Intellectual Property &amp; Legal Services
                </span>

                <h1>Our Services</h1>

                <p>
                    Strategic legal solutions designed to protect intellectual
                    property, manage commercial risks and support businesses
                    across domestic and international markets.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="services-hero-card">
                    <span class="services-hero-icon">
                        <i class="bi bi-briefcase"></i>
                    </span>

                    <div>
                        <strong>10</strong>
                        <span>Core Practice Areas</span>

                        <small>
                            End-to-end IP and legal support
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================
     SERVICES DIRECTORY
========================================= --}}
<section class="services-directory-section">
    <div class="container">

        <div class="services-section-heading">
            <span class="services-section-label">
                What We Do
            </span>

            <h2>Complete Legal and IP Support</h2>

            <p>
                Explore our core practice areas and choose the service that
                best matches your legal or intellectual property requirements.
            </p>
        </div>

        <div class="row g-4">

            {{-- Trademark --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-patch-check"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Trademark</h3>

                        <p>
                            Trademark search, registration, prosecution,
                            renewal, portfolio management and enforcement.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Copyright --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-c-circle"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Copyright</h3>

                        <p>
                            Copyright protection and advisory services for
                            creative works, software, content and artistic
                            assets.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Design --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-bezier2"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Design</h3>

                        <p>
                            Protection and registration of product shapes,
                            patterns, configurations and visual appearances.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Patent --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-lightbulb"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Patent</h3>

                        <p>
                            Patent searches, filing, prosecution and strategic
                            protection for inventions and technical innovation.
                        </p>
                    </div>
<!--
                    <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Contracts & Agreements --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-file-earmark-text"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Contracts &amp; Agreements</h3>

                        <p>
                            Drafting, reviewing and negotiating commercial,
                            licensing, employment and business agreements.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- IP Valuation --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-bar-chart-line"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>IP Valuation &amp; Due Diligence</h3>

                        <p>
                            Assessment of intellectual property assets for
                            transactions, investments and commercial planning.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Commercial Litigation --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-building-check"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Commercial Litigation</h3>

                        <p>
                            Representation in contractual, corporate,
                            partnership and complex commercial disputes.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Criminal Litigation --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-shield-lock"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Criminal Litigation</h3>

                        <p>
                            Legal representation and advisory support in
                            criminal complaints, investigations and court
                            proceedings.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- Arbitration --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-people"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>Arbitration &amp; Conciliation</h3>

                        <p>
                            Alternative dispute resolution support through
                            arbitration, conciliation and negotiated settlement.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>


            {{-- IP Enforcement --}}
            <div class="col-xl-4 col-md-6">
                <article class="service-directory-card h-100">

                    <span class="service-directory-icon">
                        <i class="bi bi-shield-exclamation"></i>
                    </span>

                    <div class="service-directory-content">
                        <h3>IP Enforcement &amp; Anti Counterfeiting</h3>

                        <p>
                            Enforcement strategies, investigations and legal
                            action against infringement and counterfeit goods.
                        </p>
                    </div>

                    <!-- <a href="#" class="service-directory-link">
                        Explore Service
                        <i class="bi bi-arrow-right"></i>
                    </a> -->

                </article>
            </div>

        </div>

    </div>
</section>


{{-- =========================================
     SERVICES CTA
========================================= --}}
<section class="services-cta-section">
    <div class="container">

        <div class="services-cta">

            <div class="services-cta-content">
                <span class="services-cta-icon">
                    <i class="bi bi-chat-dots"></i>
                </span>

                <div>
                    <h2>Need Help Choosing the Right Service?</h2>

                    <p>
                        Write to us at
                        <a href="mailto:global.ipr@blueinkk.com">
                            global.ipr@blueinkk.com
                        </a>
                        or fill out our Connect With Us form and our team will
                        guide you.
                    </p>
                </div>
            </div>

            <a href="#connect-with-us" class="services-cta-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                Connect With Us
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </div>
</section>

@endsection