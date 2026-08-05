@extends('layouts.app')

@section('title', 'About Blue Inkk | Global Intellectual Property Law Firm')

@section(
    'meta_description',
    'Learn about Blue Inkk, a full-service intellectual property law firm providing strategic IP protection, enforcement and advisory services across 100+ countries.'
)

@section('content')

{{-- =========================================
     ABOUT HERO
========================================= --}}
<section class="about-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb about-breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li
                            class="breadcrumb-item active"
                            aria-current="page"
                        >
                            About Us
                        </li>
                    </ol>
                </nav>

                <span class="about-hero-label">
                    About Blue Inkk
                </span>

                <h1>
                    Strategic Intellectual Property Protection for Modern Businesses
                </h1>

                <p>
                    Blue Inkk is a full-service Intellectual Property law firm
                    delivering strategic, business-driven IP solutions to
                    innovators across the globe.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="about-hero-summary">
                    <span class="about-hero-summary-icon">
                        <i class="bi bi-shield-check"></i>
                    </span>

                    <div>
                        <strong>360°</strong>
                        <span>IP Protection Approach</span>

                        <small>
                            Creation, protection, enforcement and monetisation
                        </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================
     OUR STORY
========================================= --}}
<section class="about-story-section">
    <div class="container">
        <div class="row align-items-start g-4 g-xl-5">

            <div class="col-lg-7">
                <div class="about-story-content">

                    <span class="about-section-label">
                        Our Story
                    </span>

                    <h2>
                        Built to Make IP Protection Proactive, Precise and Commercially Effective
                    </h2>

                    <p>
                        Blue Inkk is a full-service Intellectual Property law
                        firm delivering strategic, business-driven IP solutions
                        to innovators across the globe. Founded in October 2019
                        by Mayank Goel, and later joined by Sukhveer Singh and
                        Riya Gupta, the firm was built with a clear vision—to
                        make intellectual property protection proactive,
                        precise, and commercially effective.
                    </p>

                    <p>
                        At Blue Inkk, we follow a 360° IP Protection Approach,
                        offering end-to-end services covering creation,
                        protection, enforcement, and monetisation of
                        intellectual property. We work closely with individuals,
                        startups, MSMEs, and large corporations, tailoring our
                        strategies to align legal protection with long-term
                        business goals.
                    </p>

                </div>
            </div>

            <div class="col-lg-5">
                <div class="about-story-card">

                    <div class="about-story-card-header">
                        <span>
                            <i class="bi bi-buildings"></i>
                        </span>

                        <div>
                            <small>Established</small>
                            <h3>October 2019</h3>
                        </div>
                    </div>

                    <div class="about-founders-list">

                        <div class="about-founder-item">
                            <span class="about-founder-icon">
                                <i class="bi bi-person"></i>
                            </span>

                            <div>
                                <small>Founder</small>
                                <strong>Mayank Goel</strong>
                            </div>
                        </div>

                        <div class="about-founder-item">
                            <span class="about-founder-icon">
                                <i class="bi bi-person"></i>
                            </span>

                            <div>
                                <small>Leadership Team</small>
                                <strong>Sukhveer Singh</strong>
                            </div>
                        </div>

                        <div class="about-founder-item">
                            <span class="about-founder-icon">
                                <i class="bi bi-person"></i>
                            </span>

                            <div>
                                <small>Leadership Team</small>
                                <strong>Riya Gupta</strong>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================
     360 DEGREE APPROACH
========================================= --}}
<section class="about-approach-section">
    <div class="container">

        <div class="about-section-heading">
            <span class="about-section-label">
                Our Approach
            </span>

            <h2>360° Intellectual Property Protection</h2>

            <p>
                Our end-to-end approach supports intellectual property
                throughout its complete commercial lifecycle.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="about-approach-card h-100">
                    <span class="about-approach-icon">
                        <i class="bi bi-lightbulb"></i>
                    </span>

                    <h3>Creation</h3>

                    <p>
                        Supporting the creation and identification of valuable
                        intellectual property assets.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="about-approach-card h-100">
                    <span class="about-approach-icon">
                        <i class="bi bi-shield-check"></i>
                    </span>

                    <h3>Protection</h3>

                    <p>
                        Securing intellectual property rights through
                        appropriate domestic and international filings.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="about-approach-card h-100">
                    <span class="about-approach-icon">
                        <i class="bi bi-bank"></i>
                    </span>

                    <h3>Enforcement</h3>

                    <p>
                        Protecting intellectual property rights against misuse,
                        infringement and unauthorised exploitation.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="about-approach-card h-100">
                    <span class="about-approach-icon">
                        <i class="bi bi-graph-up-arrow"></i>
                    </span>

                    <h3>Monetisation</h3>

                    <p>
                        Helping businesses convert intellectual property into
                        sustainable commercial value.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


{{-- =========================================
     GLOBAL EXPERTISE
========================================= --}}
<section class="about-expertise-section">
    <div class="container">
        <div class="row align-items-center g-4 g-xl-5">

            <div class="col-lg-5">
                <div class="about-expertise-summary">

                    <span class="about-expertise-icon">
                        <i class="bi bi-globe2"></i>
                    </span>

                    <strong>100+</strong>

                    <h2>Countries Covered</h2>

                    <p>
                        Seamless domestic and international intellectual
                        property protection across multiple jurisdictions.
                    </p>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-expertise-content">

                    <span class="about-section-label">
                        Global Expertise
                    </span>

                    <h2>
                        Domestic and International Trademark Experience
                    </h2>

                    <p>
                        Our team has deep expertise in domestic and
                        international trademark filings, including extensive
                        experience under the Madrid Protocol, as well as
                        national filings across multiple jurisdictions. From
                        prosecution, renewals, and portfolio management to
                        enforcement and advisory, we provide seamless IP
                        protection in over 100 countries.
                    </p>

                    <ul class="about-expertise-list">
                        <li>
                            <i class="bi bi-check-lg"></i>
                            Domestic trademark filings
                        </li>

                        <li>
                            <i class="bi bi-check-lg"></i>
                            International trademark filings
                        </li>

                        <li>
                            <i class="bi bi-check-lg"></i>
                            Madrid Protocol applications
                        </li>

                        <li>
                            <i class="bi bi-check-lg"></i>
                            National filings across multiple jurisdictions
                        </li>

                        <li>
                            <i class="bi bi-check-lg"></i>
                            Prosecution and renewals
                        </li>

                        <li>
                            <i class="bi bi-check-lg"></i>
                            Portfolio management, enforcement and advisory
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================
     RECOGNITION AND CLIENTS
========================================= --}}
<section class="about-recognition-section">
    <div class="container">

        <div class="about-recognition-box">

            <div class="row align-items-center g-4 g-xl-5">

                <div class="col-lg-7">
                    <div class="about-recognition-content">

                        <span class="about-section-label">
                            Recognition &amp; Trust
                        </span>

                        <h2>
                            Recognised for Trademark Filing Excellence
                        </h2>

                        <p>
                            Blue Inkk has been recognised by the Government of
                            India among the Top 15 domestic law firms for
                            trademark filings, making us the youngest firm to
                            receive this distinction.
                        </p>

                        <p>
                            Today, we proudly serve a growing client base of
                            40,000+ clients, including leading brands such as
                            Air Arabia, Micromax, Faces Canada, Wakefit, and
                            Haldiram’s, along with eminent personalities like
                            Ajay Devgn and Premanand Maharaj Ji
                            (Premanand Govind Sharan).
                        </p>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="about-recognition-stats">

                        <div class="about-stat-card">
                            <span>
                                <i class="bi bi-award"></i>
                            </span>

                            <div>
                                <strong>Top 15</strong>
                                <small>
                                    Domestic law firms for trademark filings
                                </small>
                            </div>
                        </div>

                        <div class="about-stat-card">
                            <span>
                                <i class="bi bi-people"></i>
                            </span>

                            <div>
                                <strong>40,000+</strong>
                                <small>Clients served</small>
                            </div>
                        </div>

                        <div class="about-stat-card">
                            <span>
                                <i class="bi bi-globe-asia-australia"></i>
                            </span>

                            <div>
                                <strong>100+</strong>
                                <small>Countries covered</small>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


{{-- =========================================
     OUR BELIEF
========================================= --}}
<section class="about-belief-section">
    <div class="container">
        <div class="about-belief-box">

            <span class="about-belief-icon">
                <i class="bi bi-quote"></i>
            </span>

            <div>
                <span class="about-section-label">
                    Our Belief
                </span>

                <h2>
                    Intellectual Property Is Not Just a Legal Asset—
                    It Is a Business Advantage
                </h2>

                <p>
                    Driven by excellence, ethical practice, and constant
                    vigilance, we believe intellectual property is not just a
                    legal asset—it is a business advantage. As innovation
                    accelerates worldwide, Blue Inkk remains committed to
                    safeguarding creativity and strengthening the legal
                    foundation on which modern businesses grow.
                </p>
            </div>

        </div>
    </div>
</section>

@endsection