@extends('layouts.app')
@section('title', $country->meta_title ?: 'Trademark Registration in ' . $country->country_name . ' | Blue Inkk Global')
@section('meta_description', $country->meta_description ?: 'Professional trademark registration services in ' . $country->country_name . '.')
@section('content')
<section class="country-hero">
    <div class="container">
        {{-- Hero Section --}}
        <div class="row align-items-stretch g-4">
            {{-- Left: Main Heading and Description --}}
            <div class="col-lg-8">
                <div class="country-hero-content">
                    <h1 class="country-main-heading">
                        {{ $country->hero_heading ?: 'Trademark Registration in ' . $country->country_name }}
                    </h1>
                    @if(filled($country->hero_description))
                    <div class="country-hero-description">
                        {!! $country->hero_description !!}
                    </div>
                    @endif
                </div>
            </div>
            {{-- Right: Country Overview --}}
            <div class="col-lg-4">
                <div class="country-quick-card h-100">
                    <div class="country-card-header">
                        @if(filled($country->country_code))
                        <span
                            class="fi fi-{{ strtolower($country->country_code) }} country-flag"
                            aria-hidden="true"></span>
                        @endif
                        <div>
                            <small>Country Overview</small>

                            <h3 class="country-overview-heading">
                                {{ $country->country_name }}
                            </h3>
                        </div>
                    </div>
                    <div class="country-card-list">

                        @if(filled($country->trademark_authority))
                        <div class="country-card-item">
                            <span>Trademark Authority</span>
                            <strong>
                                {{ $country->trademark_authority }}
                            </strong>
                        </div>
                        @endif

                        @if(filled($country->application_type))
                        <div class="country-card-item">
                            <span>Application Type</span>
                            <strong>
                                {{ $country->application_type }}
                            </strong>
                        </div>
                        @endif

                        @if(filled($country->local_agent))
                        <div class="country-card-item">
                            <span>Local Agent</span>
                            <strong>
                                {{ $country->local_agent }}
                            </strong>
                        </div>
                        @endif

                        @if(filled($country->registration_validity))
                        <div class="country-card-item">
                            <span>Registration Validity</span>
                            <strong>
                                {{ $country->registration_validity }}
                            </strong>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

        </div>

        {{-- CTA Section --}}
        <div class="row mt-4 mb-4">
            <div class="col-12">
                <div class="country-cta">

                    <div class="country-cta-content">
                        <span class="country-cta-icon">
                            <i class="bi bi-shield-check"></i>
                        </span>

                        <div>
                            <h3 class="country-cta-heading">
                                Protect Your Trademark in
                                {{ $country->country_name }}
                            </h3>

                            <p>
                                Have a mark you’d like to protect in
                                {{ $country->country_name }}?
                                Write to us at
                                <a href="mailto:global.ipr@blueinkk.com">
                                    global.ipr@blueinkk.com
                                </a>
                                or fill out our Connect With Us form and our
                                team will get in touch.
                            </p>
                        </div>
                    </div>

                    <button
                        type="button"
                        class="country-cta-btn"
                        data-bs-toggle="modal"
                        data-bs-target="#enquiryModal">
                        Connect With Us
                        <i class="bi bi-arrow-right"></i>
                    </button>

                </div>
            </div>
        </div>

    </div>
</section>

@if(filled($country->why_register_heading) || !empty($country->why_register_items))
<section class="why-register-section">
        <div class="container">
             <div class="why-register-box">
                @if(filled($country->why_register_heading))
                    <h2 class="why-register-heading">
                        {{ $country->why_register_heading }}
                    </h2>
                @endif

                @if(!empty($country->why_register_items))
                    <ul class="why-register-list">
                        @foreach($country->why_register_items as $item)
                            @if(filled($item['text'] ?? null))
                                <li>
                                    <span class="why-register-check">
                                        <i class="bi bi-check-lg"></i>
                                    </span>

                                    <span>
                                        {{ $item['text'] }}
                                    </span>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                @endif

            </div>
        </div>
</section>
@endif


@if(
    filled($country->governing_law_content) ||
    filled($country->who_can_apply_content)
)
<section class="documents-section">
    <div class="container">
        <div class="row g-4">
            {{-- Governing Law --}}
            @if(filled($country->governing_law_content))
                <div class="col-lg-5">
                    <div class="legal-info-card h-100">
                        <div class="legal-info-heading">
                            <span class="legal-info-icon">
                                <i class="bi bi-bank"></i>
                            </span>
                            <h2>
                                {{ $country->governing_law_heading ?: 'Governing Law' }}
                            </h2>
                        </div>

                        <div class="legal-info-content">
                            {!! $country->governing_law_content !!}
                        </div>

                    </div>
                </div>
            @endif

            {{-- Who Can Apply --}}
            @if(filled($country->who_can_apply_content))
                <div class="col-lg-7">
                    <div class="legal-info-card h-100">

                        <div class="legal-info-heading">
                            <span class="legal-info-icon">
                                <i class="bi bi-person-check"></i>
                            </span>

                            <h2>
                                {{ $country->who_can_apply_heading ?: 'Who Can Apply' }}
                            </h2>
                        </div>

                        <div class="legal-info-content">
                            {!! $country->who_can_apply_content !!}
                        </div>

                        @if(filled($country->who_can_apply_note))
                            <div class="legal-info-note">
                                <span class="legal-note-icon">
                                    <i class="bi bi-info-lg"></i>
                                </span>

                                <div class="legal-note-content">
                                    {!! $country->who_can_apply_note !!}
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            @endif

        </div>
    </div>
</section>
@endif

@if(
    filled($country->documents_heading) ||
    filled($country->documents_intro) ||
    !empty($country->documents_items)
)
<section class="documents-section">
        <div class="container">

            {{-- Section heading and introduction --}}

        <div class="documents-header">
            <span class="documents-header-icon">
                <i class="bi bi-files"></i>
            </span>
            <div>
                            @if(filled($country->documents_heading))
                    <h2 class="documents-heading">
                        {{ $country->documents_heading }}
                    </h2>
                @endif

                  @if(filled($country->documents_intro))
                    <p class="documents-intro">
                        {!! $country->documents_intro !!}
                    </p>
                @endif
            </div>
        </div>


            {{-- Documents list --}}
            @if(!empty($country->documents_items))
                <ol class="documents-list">
                    @foreach($country->documents_items as $item)
                        @if(filled($item['title'] ?? null))
                            <li>
                                <div class="document-item">
                                    <span class="document-number">
                                        {{ $loop->iteration }}
                                    </span>

                                    <p>
                                        <strong>
                                            {{ $item['title'] }}
                                        </strong>

                                        @if(filled($item['description'] ?? null))
                                            —
                                            {{ $item['description'] }}
                                        @endif
                                    </p>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ol>
            @endif

            {{-- Important note --}}
            @if(filled($country->documents_note))
                <div class="documents-note">
                    <span class="documents-note-icon">
                        <i class="bi bi-info-lg"></i>
                    </span>

                    <div class="documents-note-content">
                        {!! $country->documents_note !!}
                    </div>
                </div>
            @endif



        <div class="documents-cta">
            <div>
                <h3>Not sure which documents apply to your case?</h3>

                <p>
                    Reach out to us at
                    <a href="mailto:global.ipr@blueinkk.com">
                        global.ipr@blueinkk.com
                    </a>
                    or fill out our Connect With Us form, and we’ll guide you
                    through it.
                </p>
            </div>

            <a href="#connect-with-us" class="documents-cta-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                Connect With Us
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>



        </div>
</section>
@endif

@if(
    filled($country->filing_process_heading) ||
    !empty($country->filing_process_steps)
)
    <section class="filing-process-section">
        <div class="container">

            @if(filled($country->filing_process_heading))
                <div class="filing-process-header">
                    <span class="filing-process-icon">
                        <i class="bi bi-list-check"></i>
                    </span>

                    <h2>
                        {{ $country->filing_process_heading }}
                    </h2>
                </div>
            @endif

            @if(!empty($country->filing_process_steps))
                <div class="filing-process-timeline">

                    @foreach($country->filing_process_steps as $step)
                        @if(
                            filled($step['title'] ?? null) ||
                            filled($step['description'] ?? null)
                        )
                            <div class="filing-process-item">

                                <div class="filing-step-number">
                                    {{ $loop->iteration }}
                                </div>

                                <div class="filing-step-content">
                                    @if(filled($step['title'] ?? null))
                                        <h3>
                                            {{ $step['title'] }}
                                        </h3>
                                    @endif

                                    @if(filled($step['description'] ?? null))
                                        <p>
                                            {{ $step['description'] }}
                                        </p>
                                    @endif
                                </div>

                            </div>
                        @endif
                    @endforeach

                </div>
            @endif

        </div>
    </section>
@endif

@if(
    !empty($country->government_fees_items) ||
    !empty($country->registration_time_items) ||
    filled($country->registration_time_content)
)
    <section class="fees-timeline-section">
        <div class="container">
            <div class="row g-4">

                {{-- Government Fees --}}
                @if(!empty($country->government_fees_items))
                    <div class="col-lg-5">
                        <div class="government-fees-card h-100">

                            <div class="fees-card-header">
                                <span class="fees-card-icon">
                                    <i class="bi bi-cash-coin"></i>
                                </span>

                                <h2>
                                    {{ $country->government_fees_heading ?: 'Government Fees' }}
                                </h2>
                            </div>

                            <div class="fees-list">
                                @foreach($country->government_fees_items as $fee)
                                    @if(
                                        filled($fee['label'] ?? null) ||
                                        filled($fee['amount'] ?? null)
                                    )
                                        <div class="fee-item">
                                            <div class="fee-item-content">

                                                @if(filled($fee['label'] ?? null))
                                                    <span class="fee-label">
                                                        {{ $fee['label'] }}
                                                    </span>
                                                @endif

                                                @if(filled($fee['amount'] ?? null))
                                                    <strong class="fee-amount">
                                                        {{ $fee['amount'] }}
                                                    </strong>
                                                @endif

                                                @if(filled($fee['description'] ?? null))
                                                    <p>
                                                        {{ $fee['description'] }}
                                                    </p>
                                                @endif

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                    </div>
                @endif

                {{-- Registration Timeline --}}
                @if(
                    !empty($country->registration_time_items) ||
                    filled($country->registration_time_content)
                )
                    <div class="col-lg-7">
                        <div class="registration-time-card h-100">

                            <div class="registration-time-header">
                                <span class="registration-time-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>

                                <h2>
                                    {{ $country->registration_time_heading ?: 'Time Period for Registration' }}
                                </h2>
                            </div>

                            @if(!empty($country->registration_time_items))
                                <div class="registration-time-summary">

                                    @foreach($country->registration_time_items as $item)
                                        @if(
                                            filled($item['duration'] ?? null) ||
                                            filled($item['unit'] ?? null) ||
                                            filled($item['label'] ?? null)
                                        )
                                            @if(!$loop->first)
                                                <div class="time-summary-divider"></div>
                                            @endif

                                            <div class="time-summary-item">
                                                @if(filled($item['duration'] ?? null))
                                                    <strong>
                                                        {{ $item['duration'] }}
                                                    </strong>
                                                @endif

                                                @if(filled($item['unit'] ?? null))
                                                    <span>
                                                        {{ $item['unit'] }}
                                                    </span>
                                                @endif

                                                @if(filled($item['label'] ?? null))
                                                    <small>
                                                        {{ $item['label'] }}
                                                    </small>
                                                @endif
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            @endif

                            @if(filled($country->registration_time_content))
                                <div class="registration-time-content">
                                    {!! $country->registration_time_content !!}
                                </div>
                            @endif

                        </div>
                    </div>
                @endif

            </div>
        </div>
    </section>
@endif

@if(
    filled($country->validity_renewal_heading) ||
    filled($country->validity_duration) ||
    !empty($country->renewal_items)
)
    <section class="validity-renewal-section">
        <div class="container">
            <div class="validity-renewal-box">

                <div class="row align-items-stretch g-4">

                    {{-- Validity Summary --}}
                    <div class="col-lg-4">
                        <div class="validity-summary h-100">

                            <span class="validity-icon">
                                <i class="bi bi-arrow-repeat"></i>
                            </span>

                            @if(filled($country->validity_renewal_heading))
                                <h2>
                                    {{ $country->validity_renewal_heading }}
                                </h2>
                            @endif

                            @if(
                                filled($country->validity_duration) ||
                                filled($country->validity_unit) ||
                                filled($country->validity_label)
                            )
                                <div class="validity-period">

                                    @if(filled($country->validity_duration))
                                        <strong>
                                            {{ $country->validity_duration }}
                                        </strong>
                                    @endif

                                    <div>
                                        @if(filled($country->validity_unit))
                                            <span>
                                                {{ $country->validity_unit }}
                                            </span>
                                        @endif

                                        @if(filled($country->validity_label))
                                            <small>
                                                {{ $country->validity_label }}
                                            </small>
                                        @endif
                                    </div>

                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- Renewal Details --}}
                    @if(!empty($country->renewal_items))
                        <div class="col-lg-8">
                            <ul class="renewal-list">

                                @foreach($country->renewal_items as $item)
                                    @if(filled($item['content'] ?? null))
                                        <li>
                                            <span class="renewal-check">
                                                <i class="bi bi-check-lg"></i>
                                            </span>

                                            <p>
                                                {{ $item['content'] }}
                                            </p>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </section>
@endif

@if(
    filled($country->refusal_heading) ||
    filled($country->refusal_intro) ||
    !empty($country->refusal_items)
)
    <section class="refusal-section">
        <div class="container">
            <div class="refusal-box">

                <div class="refusal-header">
                    <span class="refusal-header-icon">
                        <i class="bi bi-shield-exclamation"></i>
                    </span>

                    <div>
                        @if(filled($country->refusal_heading))
                            <h2>
                                {{ $country->refusal_heading }}
                            </h2>
                        @endif

                        @if(filled($country->refusal_intro))
                            <p>
                                {{ $country->refusal_intro }}
                            </p>
                        @endif
                    </div>
                </div>

                @if(!empty($country->refusal_items))
                    <ul class="refusal-list">

                        @foreach($country->refusal_items as $item)
                            @if(filled($item['content'] ?? null))
                                <li>
                                    <span class="refusal-icon">
                                        <i class="bi bi-x-lg"></i>
                                    </span>

                                    <span>
                                        {{ $item['content'] }}
                                    </span>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                @endif

            </div>
        </div>
    </section>
@endif

@if(
    filled($country->help_label) ||
    filled($country->help_heading) ||
    filled($country->help_content) ||
    !empty($country->help_items) ||
    filled($country->help_cta_heading) ||
    filled($country->legal_disclaimer)
)
    <section class="blueinkk-help-section">
        <div class="container">

            <div class="blueinkk-help-box">
                <div class="row align-items-center g-4 g-xl-5">

                    {{-- Left Content --}}
                    <div class="col-lg-5">
                        <div class="blueinkk-help-content">

                            @if(filled($country->help_label))
                                <span class="blueinkk-help-label">
                                    <i class="bi bi-shield-check"></i>
                                    {{ $country->help_label }}
                                </span>
                            @endif

                            @if(filled($country->help_heading))
                                <h2>
                                    {{ $country->help_heading }}
                                </h2>
                            @endif

                            @if(filled($country->help_content))
                                <div class="blueinkk-help-description">
                                    {!! $country->help_content !!}
                                </div>
                            @endif

                        </div>
                    </div>

                    {{-- Services List --}}
                    @if(!empty($country->help_items))
                        <div class="col-lg-7">
                            <ul class="blueinkk-help-list">

                                @foreach($country->help_items as $item)
                                    @if(filled($item['content'] ?? null))
                                        <li>
                                            <span class="blueinkk-help-check">
                                                <i class="bi bi-check-lg"></i>
                                            </span>

                                            <span>
                                                {{ $item['content'] }}
                                            </span>
                                        </li>
                                    @endif
                                @endforeach

                            </ul>
                        </div>
                    @endif

                </div>

                {{-- Final CTA --}}
                @if(
                    filled($country->help_cta_heading) ||
                    filled($country->help_cta_content) ||
                    filled($country->help_cta_email)
                )
                    <div class="blueinkk-final-cta">

                        <div class="blueinkk-final-cta-content">
                            <span class="blueinkk-final-cta-icon">
                                <i class="bi bi-chat-dots"></i>
                            </span>

                            <div>
                                @if(filled($country->help_cta_heading))
                                    <h3>
                                        {{ $country->help_cta_heading }}
                                    </h3>
                                @endif

                                @if(filled($country->help_cta_content))
                                    <div class="blueinkk-final-cta-description">
                                        {!! $country->help_cta_content !!}
                                    </div>
                                @endif

                                @if(filled($country->help_cta_email))
                                    <a href="mailto:{{ $country->help_cta_email }}">
                                        {{ $country->help_cta_email }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        @if(filled($country->help_cta_button_text))
                            <a
                                href="{{ $country->help_cta_button_url ?: '#connect-with-us' }}"
                                class="blueinkk-final-cta-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#enquiryModal"
                            >
                                {{ $country->help_cta_button_text }}

                                <i class="bi bi-arrow-right"></i>
                            </a>
                        @endif

                    </div>
                @endif

            </div>

            {{-- Legal Disclaimer --}}
            @if(filled($country->legal_disclaimer))
                <div class="country-legal-disclaimer">
                    <span class="country-disclaimer-icon">
                        <i class="bi bi-info-circle"></i>
                    </span>

                    <p>
                        {{ $country->legal_disclaimer }}
                    </p>
                </div>
            @endif

        </div>
    </section>
@endif
@endsection