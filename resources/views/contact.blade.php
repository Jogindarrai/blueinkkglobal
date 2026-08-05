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

                    <form
                        action="{{ url('/enquiry-submit') }}"
                        method="POST"
                        class="contact-enquiry-form">
                        @csrf

                        <div class="contact-form-body">
                            <div class="row g-3">

                                {{-- Full Name --}}
                                <div class="col-md-6">
                                    <label
                                        for="contact-name"
                                        class="form-label">
                                        Full Name
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="text"
                                        id="contact-name"
                                        name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter your full name"
                                        value="{{ old('name') }}"
                                        autocomplete="name"
                                        required>

                                    @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Email Address --}}
                                <div class="col-md-6">
                                    <label
                                        for="contact-email"
                                        class="form-label">
                                        Email Address
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="email"
                                        id="contact-email"
                                        name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Enter your email address"
                                        value="{{ old('email') }}"
                                        autocomplete="email"
                                        required>

                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Phone Number --}}
                                <div class="col-md-6">
                                    <label
                                        for="contact-phone"
                                        class="form-label">
                                        Phone Number
                                        <span class="text-danger">*</span>
                                    </label>

                                    <input
                                        type="tel"
                                        id="contact-phone"
                                        name="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        placeholder="Enter your phone number"
                                        value="{{ old('phone') }}"
                                        autocomplete="tel"
                                        required>

                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Country --}}
                                <div class="col-md-6">
                                    <label
                                        for="contact-country"
                                        class="form-label">
                                        Country
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select
                                        id="contact-country"
                                        name="country"
                                        class="form-select @error('country') is-invalid @enderror"
                                        required>
                                        <option value="" disabled @selected(!old('country'))>
                                            Select country
                                        </option>

                                        <option
                                            value="India"
                                            @selected(old('country')==='India' )>
                                            India
                                        </option>

                                        <option
                                            value="Nepal"
                                            @selected(old('country')==='Nepal' )>
                                            Nepal
                                        </option>

                                        <option
                                            value="United States"
                                            @selected(old('country')==='United States' )>
                                            United States
                                        </option>

                                        <option
                                            value="United Kingdom"
                                            @selected(old('country')==='United Kingdom' )>
                                            United Kingdom
                                        </option>

                                        <option
                                            value="United Arab Emirates"
                                            @selected(old('country')==='United Arab Emirates' )>
                                            United Arab Emirates
                                        </option>

                                        <option
                                            value="Singapore"
                                            @selected(old('country')==='Singapore' )>
                                            Singapore
                                        </option>

                                        <option
                                            value="Australia"
                                            @selected(old('country')==='Australia' )>
                                            Australia
                                        </option>

                                        <option
                                            value="Canada"
                                            @selected(old('country')==='Canada' )>
                                            Canada
                                        </option>

                                        <option
                                            value="Other"
                                            @selected(old('country')==='Other' )>
                                            Other
                                        </option>
                                    </select>

                                    @error('country')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Service Required --}}
                                <div class="col-12">
                                    <label
                                        for="contact-service"
                                        class="form-label">
                                        Service Required
                                        <span class="text-danger">*</span>
                                    </label>

                                    <select
                                        id="contact-service"
                                        name="service"
                                        class="form-select @error('service') is-invalid @enderror"
                                        required>
                                        <option value="" disabled @selected(!old('service'))>
                                            Select service
                                        </option>

                                        <option
                                            value="Trademark"
                                            @selected(old('service')==='Trademark' )>
                                            Trademark
                                        </option>

                                        <option
                                            value="Copyright"
                                            @selected(old('service')==='Copyright' )>
                                            Copyright
                                        </option>

                                        <option
                                            value="Design"
                                            @selected(old('service')==='Design' )>
                                            Design
                                        </option>

                                        <option
                                            value="Patent"
                                            @selected(old('service')==='Patent' )>
                                            Patent
                                        </option>

                                        <option
                                            value="Contracts & Agreements"
                                            @selected(old('service')==='Contracts & Agreements' )>
                                            Contracts &amp; Agreements
                                        </option>

                                        <option
                                            value="IP Valuation & Due Diligence"
                                            @selected(old('service')==='IP Valuation & Due Diligence' )>
                                            IP Valuation &amp; Due Diligence
                                        </option>

                                        <option
                                            value="Commercial Litigation"
                                            @selected(old('service')==='Commercial Litigation' )>
                                            Commercial Litigation
                                        </option>

                                        <option
                                            value="Criminal Litigation"
                                            @selected(old('service')==='Criminal Litigation' )>
                                            Criminal Litigation
                                        </option>

                                        <option
                                            value="Arbitration & Conciliation"
                                            @selected(old('service')==='Arbitration & Conciliation' )>
                                            Arbitration &amp; Conciliation
                                        </option>

                                        <option
                                            value="IP Enforcement & Anti Counterfeiting"
                                            @selected(old('service')==='IP Enforcement & Anti Counterfeiting' )>
                                            IP Enforcement &amp; Anti Counterfeiting
                                        </option>
                                    </select>

                                    @error('service')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                {{-- Your Requirement --}}
                                <div class="col-12">
                                    <label
                                        for="contact-message"
                                        class="form-label">
                                        Your Requirement
                                        <span class="text-danger">*</span>
                                    </label>

                                    <textarea
                                        id="contact-message"
                                        name="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        rows="5"
                                        placeholder="Tell us briefly about your requirement"
                                        required>{{ old('message') }}</textarea>

                                    @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        {{-- Form Actions --}}
                        <div class="contact-form-actions">

                            <button
                                type="reset"
                                class="contact-reset-btn">
                                Clear Form
                            </button>

                            <button
                                type="submit"
                                class="contact-submit-btn">
                                Submit Enquiry
                                <i class="bi bi-send"></i>
                            </button>

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection