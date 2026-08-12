@extends('layouts.app')

@section('title', 'Contact Us | Blue Inkk Global')

@section(
'meta_description',
'Contact Blue Inkk Global for trademark registration, intellectual property protection and legal advisory services.'
)

@section('content')

{{-- =========================================
     CONTACT HERO
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
                            aria-current="page">
                            Contact Us
                        </li>

                    </ol>
                </nav>

                <span class="contact-hero-label">
                    Connect With Blue Inkk
                </span>

                <h1>Contact Us</h1>

                <p>
                    Get in touch with our team for intellectual property,
                    trademark and legal advisory support.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="contact-hero-card">

                    <span class="contact-hero-icon">
                        <i class="bi bi-chat-dots"></i>
                    </span>

                    <div>
                        <strong>Let’s Talk</strong>

                        <span>Speak With Our Team</span>

                        <small>
                            Share your enquiry and we’ll get in touch
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- =========================================
     CONTACT SECTION
========================================= --}}
<section class="contact-section">
    <div class="container">

        <div class="row g-4 g-xl-5">

            {{-- Contact information --}}
            <div class="col-lg-5">
                <div class="contact-information">

                    <span class="contact-section-label">
                        Contact Information
                    </span>

                    <h2>Get in Touch With Our Team</h2>

                    <p class="contact-information-intro">
                        Reach out to Blue Inkk for trademark registration,
                        intellectual property protection and legal advisory
                        services.
                    </p>

                    <div class="contact-details-list">

                        {{-- Address --}}
                        <div class="contact-detail-item">

                            <span class="contact-detail-icon">
                                <i class="bi bi-geo-alt"></i>
                            </span>

                            <div>
                                <small>Office Address</small>

                                <address>
                                    G-49-50, Second Floor, Office No. 1,
                                    Near Sector 16 Metro Station, Block G,
                                    Sector 3, Noida, Uttar Pradesh – 201301,
                                    India
                                </address>
                            </div>

                        </div>

                        {{-- Email --}}
                        <div class="contact-detail-item">

                            <span class="contact-detail-icon">
                                <i class="bi bi-envelope"></i>
                            </span>

                            <div>
                                <small>Email Address</small>

                                <a href="mailto:global.ipr@blueinkk.com">
                                    global.ipr@blueinkk.com
                                </a>
                            </div>

                        </div>

                        {{-- Phone --}}
                        <div class="contact-detail-item">

                            <span class="contact-detail-icon">
                                <i class="bi bi-telephone"></i>
                            </span>

                            <div>
                                <small>Phone Number</small>

                                <a href="tel:+919958000637">
                                    +91-9958000637
                                </a>
                            </div>

                        </div>

                    </div>

                    <div class="contact-office-note">
                        <i class="bi bi-info-circle"></i>

                        <p>
                            For international trademark enquiries, please
                            include the country and the nature of assistance
                            required in your message.
                        </p>
                    </div>

                </div>
            </div>


            {{-- Contact form --}}
            <div class="col-lg-7">
                <div class="contact-form-card">

                    <div class="contact-form-header">
                        <span class="contact-form-icon">
                            <i class="bi bi-send"></i>
                        </span>

                        <div>
                            <h2>Send Us Your Enquiry</h2>

                            <p>
                                Fill out the form and our team will get in touch
                                with you.
                            </p>
                        </div>
                    </div>

                  @include('partials.enquiry-modal', [
                        'formLocation' => 'page'
                    ])



                </div>
            </div>

        </div>

    </div>
</section>

@endsection