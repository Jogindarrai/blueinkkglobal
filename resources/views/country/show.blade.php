@extends('layouts.app')
@section('title', $country->meta_title ?: 'Trademark Registration in ' . $country->country_name . ' | Blue Inkk Global')
@section('meta_description', $country->meta_description ?: 'Professional trademark registration services in ' . $country->country_name . '.')
@section('content')
@php
    $hasRichContent = static function ($value): bool {
        $html = trim((string) $value);

        if ($html === '') {
            return false;
        }

        // Image/table-only editor content should also count as real content.
        if (preg_match('/<(img|table|iframe|video|audio)\b/i', $html)) {
            return true;
        }

        $text = html_entity_decode(
            strip_tags($html),
            ENT_QUOTES | ENT_HTML5,
            'UTF-8'
        );

        return trim(str_replace("\xC2\xA0", ' ', $text)) !== '';
    };

    /*
    |--------------------------------------------------------------------------
    | Section visibility checks
    |--------------------------------------------------------------------------
    | A Filament repeater can contain an empty row. Checking only !empty()
    | would treat that row as content, so every repeater is validated here.
    */
    $hasOverviewItems = collect($country->country_overview_items ?? [])
        ->contains(fn ($item) =>
            filled($item['heading'] ?? null) ||
            filled($item['value'] ?? null)
        );

    $validWhyRegisterItems = collect($country->why_register_items ?? [])
        ->filter(fn ($item) => filled($item['text'] ?? null))
        ->values();
    $hasWhyRegisterItems = $validWhyRegisterItems->isNotEmpty();

    $validDocumentItems = collect($country->documents_items ?? [])
        ->filter(fn ($item) =>
            filled($item['title'] ?? null) ||
            filled($item['description'] ?? null)
        )
        ->values();
    $hasDocumentItems = $validDocumentItems->isNotEmpty();

    $validFilingSteps = collect($country->filing_process_steps ?? [])
        ->filter(fn ($item) =>
            filled($item['title'] ?? null) ||
            filled($item['description'] ?? null)
        )
        ->values();
    $hasFilingSteps = $validFilingSteps->isNotEmpty();

    $hasGovernmentFees = collect($country->government_fees_items ?? [])
        ->contains(fn ($item) =>
            filled($item['label'] ?? null) ||
            filled($item['amount'] ?? null) ||
            filled($item['description'] ?? null)
        );

    $hasRegistrationTimeItems = collect($country->registration_time_items ?? [])
        ->contains(fn ($item) =>
            filled($item['duration'] ?? null) ||
            filled($item['unit'] ?? null) ||
            filled($item['label'] ?? null)
        );

    $hasRenewalItems = collect($country->renewal_items ?? [])
        ->contains(fn ($item) => filled($item['content'] ?? null));

    $validRefusalItems = collect($country->refusal_items ?? [])
        ->filter(fn ($item) => $hasRichContent($item['content'] ?? null))
        ->values();
    $hasRefusalItems = $validRefusalItems->isNotEmpty();

    $hasHelpItems = collect($country->help_items ?? [])
        ->contains(fn ($item) => filled($item['content'] ?? null));
@endphp
{{-- ==================== HERO SECTION START ==================== --}}
<section class="country-hero">
    <div class="container">
        {{-- Hero Section --}}
        <div class="row align-items-stretch g-4">
            {{-- Left: Main Heading and Description --}}
            <div class="{{ $hasOverviewItems ? 'col-lg-8' : 'col-12' }}">
                <div class="country-hero-content">
                    <h1 class="country-main-heading">
                        {{ $country->hero_heading ?: 'Trademark Registration in ' . $country->country_name }}
                    </h1>
                    @if($hasRichContent($country->hero_description))
                    <div class="country-rich-content">
                        {!! $country->hero_description !!}
                    </div>
                    @endif
                </div>
            </div>
            {{-- Right: Country Overview --}}
            @if($hasOverviewItems)
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
                    @if($hasOverviewItems)
                        <div class="country-card-list">
                            @foreach($country->country_overview_items as $item)
                                @if(filled($item['heading'] ?? null) || filled($item['value'] ?? null))
                                    <div class="country-card-item">
                                        @if(filled($item['heading'] ?? null))
                                            <span>
                                                {{ $item['heading'] }}
                                            </span>
                                        @endif

                                        @if(filled($item['value'] ?? null))
                                            @php
                                                $overviewValue = trim($item['value']);
                                                $isUrl = filter_var(
                                                    $overviewValue,
                                                    FILTER_VALIDATE_URL
                                                );
                                            @endphp

                                            @if($isUrl)
                                                <a
                                                    href="{{ $overviewValue }}"
                                                    target="_blank"
                                                    rel="noopener noreferrer"
                                                    class="country-overview-link">
                                                    Visit Official Website
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            @else
                                                <strong>
                                                    {{ $overviewValue }}
                                                </strong>
                                            @endif
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            @endif

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
{{-- ===================== HERO SECTION END ===================== --}}

{{-- ================= OVERVIEW SECTION START ================= --}}

@if($hasRichContent($country->overview_content))
    <section class="country-overview-section">
        <div class="container">
            <div class="country-rich-content">
                {!! $country->overview_content !!}
            </div>
        </div>
    </section>
@endif

{{-- ================== OVERVIEW SECTION END ================== --}}
{{-- ================ WHY REGISTER SECTION START ================ --}}

@if($hasWhyRegisterItems)
    <section class="why-register-section">
        <div class="container">
            <div class="why-register-box">

                {{-- Heading --}}
                @if(filled($country->why_register_heading))
                    <h2 class="why-register-heading">
                        {{ $country->why_register_heading }}
                    </h2>
                @endif

                {{-- Subheading --}}
                @if(filled($country->why_register_subheading))
                    <p class="why-register-subheading">
                        {{ $country->why_register_subheading }}
                    </p>
                @endif

                {{-- Items --}}
                <ul class="why-register-list">
                    @foreach($validWhyRegisterItems as $item)
                        <li>
                            <span class="why-register-check">
                                <i class="bi bi-check-lg"></i>
                            </span>

                            <span>
                                {{ $item['text'] }}
                            </span>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </section>
@endif

{{-- ================= WHY REGISTER SECTION END ================= --}}

{{-- ============ GOVERNING LAW / WHO CAN APPLY START ============ --}}
@if(
    $hasRichContent($country->governing_law_content) ||
    $hasRichContent($country->who_can_apply_content)
)
<section class="documents-section">
    <div class="container">
        <div class="row g-4">
            {{-- Governing Law --}}
            @if($hasRichContent($country->governing_law_content))
                <div class="{{ $hasRichContent($country->who_can_apply_content) ? 'col-lg-5' : 'col-12' }}">
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
            @if($hasRichContent($country->who_can_apply_content))
                <div class="{{ $hasRichContent($country->governing_law_content) ? 'col-lg-7' : 'col-12' }}">
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

                        @if($hasRichContent($country->who_can_apply_note))
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
{{-- ============= GOVERNING LAW / WHO CAN APPLY END ============= --}}

{{-- ================= DOCUMENTS SECTION START ================= --}}
@if(
    $hasRichContent($country->documents_intro) ||
    $hasDocumentItems ||
    $hasRichContent($country->documents_note)
)
<section class="documents-section">
        <div class="container">

            {{-- Section heading and introduction --}}
            @if(
                filled($country->documents_heading) ||
                $hasRichContent($country->documents_intro)
            )
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

                        @if($hasRichContent($country->documents_intro))
                            <div class="documents-intro">
                                {!! $country->documents_intro !!}
                            </div>
                        @endif
                    </div>
                </div>
            @endif


            {{-- Documents list --}}
            @if($hasDocumentItems)
                <ol class="documents-list">
                    @foreach($validDocumentItems as $item)
                            <li>
                                <div class="document-item">
                                    <span class="document-number">
                                        {{ $loop->iteration }}
                                    </span>

                                    <p>
                                        @if(filled($item['title'] ?? null))
                                            <strong>
                                                {{ $item['title'] }}
                                            </strong>
                                        @endif

                                        @if(filled($item['description'] ?? null))
                                            @if(filled($item['title'] ?? null))—@endif
                                            {{ $item['description'] }}
                                        @endif
                                    </p>
                                </div>
                            </li>
                    @endforeach
                </ol>
            @endif

            {{-- Important note --}}
            @if($hasRichContent($country->documents_note))
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
{{-- ================== DOCUMENTS SECTION END ================== --}}

{{-- ============== FILING PROCESS SECTION START ============== --}}
@if($hasFilingSteps)
    <section class="filing-process-section">
        <div class="container">

            {{-- Main section heading and subheading --}}
            @if(
                filled($country->filing_process_heading) ||
                filled($country->filing_process_subheading)
            )
                <div class="filing-process-header">

                    <span class="filing-process-icon">
                        <i class="bi bi-list-check"></i>
                    </span>

                    <div class="filing-process-title-content">

                        @if(filled($country->filing_process_heading))
                            <h2>
                                {{ $country->filing_process_heading }}
                            </h2>
                        @endif

                        @if(filled($country->filing_process_subheading))
                            <p class="filing-process-subheading">
                                {{ $country->filing_process_subheading }}
                            </p>
                        @endif

                    </div>

                </div>
            @endif

            {{-- Filing steps area --}}
            <div class="filing-process-timeline">

                {{-- Heading before filing steps --}}
                @if(filled($country->filing_steps_heading))
                    <h3 class="filing-steps-heading">
                        {{ $country->filing_steps_heading }}
                    </h3>
                @endif

                {{-- Filing steps list --}}
                @foreach($validFilingSteps as $step)
                    <div class="filing-process-item">

                        <div class="filing-step-number">
                            {{ $loop->iteration }}
                        </div>

                        <div class="filing-step-content">

                            @if(filled($step['title'] ?? null))
                                <h4>
                                    {{ $step['title'] }}
                                </h4>
                            @endif

                            @if(filled($step['description'] ?? null))
                                <p>
                                    {{ $step['description'] }}
                                </p>
                            @endif

                        </div>

                    </div>
                @endforeach

            </div>
            {{-- Filing process images --}}
@php
    $filingProcessImages = collect(
        $country->filing_process_images ?? []
    )->filter()->values();
@endphp

@if($filingProcessImages->isNotEmpty())
    <div class="filing-process-images row g-4">

        @foreach($filingProcessImages as $image)
            <div class="{{ $filingProcessImages->count() === 1 ? 'col-12' : 'col-md-6' }}">
                <div class="filing-process-image-card">
                    <img
                        src="{{ asset('storage/' . $image) }}"
                        alt="{{ $country->country_name }} trademark filing process"
                        loading="lazy"
                    >
                </div>
            </div>
        @endforeach

    </div>
@endif

        </div>
    </section>
@endif
{{-- =============== FILING PROCESS SECTION END =============== --}}

{{-- ============ FEES AND TIMELINE SECTION START ============ --}}
@if(
    $hasGovernmentFees ||
    $hasRegistrationTimeItems ||
    $hasRichContent($country->registration_time_content)
)
    <section class="fees-timeline-section">
        <div class="container">
            <div class="row g-4">

                {{-- Government Fees --}}
                @if($hasGovernmentFees)
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
                    $hasRegistrationTimeItems ||
                    $hasRichContent($country->registration_time_content)
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

                            @if($hasRegistrationTimeItems)
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

                            @if($hasRichContent($country->registration_time_content))
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
{{-- ============= FEES AND TIMELINE SECTION END ============= --}}

{{-- ========== VALIDITY AND RENEWAL SECTION START ========== --}}
@if(
    filled($country->validity_renewal_heading) ||
    filled($country->validity_duration) ||
    filled($country->validity_unit) ||
    filled($country->validity_label) ||
    $hasRenewalItems
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
                    @if($hasRenewalItems)
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
{{-- =========== VALIDITY AND RENEWAL SECTION END =========== --}}

{{-- ================= REFUSAL SECTION START ================= --}}
@if($hasRichContent($country->refusal_intro) || $hasRefusalItems)
    <section class="refusal-section">
        <div class="container">
            <div class="refusal-box">

                @if(
                    filled($country->refusal_heading) ||
                    $hasRichContent($country->refusal_intro)
                )
                    <div class="refusal-header">
                        <span class="refusal-header-icon">
                            <i class="bi bi-shield-exclamation"></i>
                        </span>

                        <div>
                            @if(filled($country->refusal_heading))
                                <h2>{{ $country->refusal_heading }}</h2>
                            @endif

                            @if($hasRichContent($country->refusal_intro))
                                <div class="refusal-intro">
                                    {!! $country->refusal_intro !!}
                                </div>
                            @endif
                        </div>
                    </div>
                @endif

                @if($hasRefusalItems)
                    <ul class="refusal-list">

                        @foreach($validRefusalItems as $item)
                            <li>
                                <span class="refusal-icon">
                                    <i class="bi bi-x-lg"></i>
                                </span>

                                <div class="refusal-item-content">
                                    {!! $item['content'] !!}
                                </div>
                            </li>
                        @endforeach

                    </ul>
                @endif

            </div>
        </div>
    </section>
@endif
{{-- ================== REFUSAL SECTION END ================== --}}

{{-- ============== HELP AND LEGAL SECTION START ============== --}}
@php
    $validHelpItems = collect($country->help_items ?? [])
        ->filter(fn ($item) => $hasRichContent($item['content'] ?? null))
        ->values();

    $hasHelpDescription = $hasRichContent($country->help_content);
    $hasMainHelpContent = $hasHelpDescription || $validHelpItems->isNotEmpty();

    // CTA heading alone does not display the CTA.
    $hasHelpCta =
        $hasRichContent($country->help_cta_content) ||
        filled($country->help_cta_email) ||
        filled($country->help_cta_button_text);

    $hasLegalDisclaimer = $hasRichContent($country->legal_disclaimer);
    $hasHelpSection = $hasMainHelpContent || $hasHelpCta || $hasLegalDisclaimer;
@endphp

@if($hasHelpSection)
    <section class="blueinkk-help-section">
        <div class="container">

            @if($hasMainHelpContent || $hasHelpCta)
                <div class="blueinkk-help-box">

                    @if($hasMainHelpContent)
                        <div class="row align-items-center g-4 g-xl-5">

                            @if($hasHelpDescription)
                                <div class="{{ $validHelpItems->isNotEmpty() ? 'col-lg-5' : 'col-12' }}">
                                    <div class="blueinkk-help-content">
                                        @if(filled($country->help_label))
                                            <span class="blueinkk-help-label">
                                                <i class="bi bi-shield-check"></i>
                                                {{ $country->help_label }}
                                            </span>
                                        @endif

                                        @if(filled($country->help_heading))
                                            <h2>{{ $country->help_heading }}</h2>
                                        @endif

                                        <div class="blueinkk-help-description">
                                            {!! $country->help_content !!}
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if($validHelpItems->isNotEmpty())
                                <div class="{{ $hasHelpDescription ? 'col-lg-7' : 'col-12' }}">
                                    <ul class="blueinkk-help-list">
                                        @foreach($validHelpItems as $item)
                                            <li>
                                                <span class="blueinkk-help-check">
                                                    <i class="bi bi-check-lg"></i>
                                                </span>

                                                <div class="blueinkk-help-item-content">
                                                    {!! $item['content'] !!}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>
                    @endif

                    @if($hasHelpCta)
                        <div class="blueinkk-final-cta">
                            <div class="blueinkk-final-cta-content">
                                <span class="blueinkk-final-cta-icon">
                                    <i class="bi bi-chat-dots"></i>
                                </span>

                                <div>
                                    @if(filled($country->help_cta_heading))
                                        <h3>{{ $country->help_cta_heading }}</h3>
                                    @endif

                                    @if($hasRichContent($country->help_cta_content))
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
                                    @if(
                                        blank($country->help_cta_button_url) ||
                                        $country->help_cta_button_url === '#connect-with-us'
                                    )
                                        data-bs-toggle="modal"
                                        data-bs-target="#enquiryModal"
                                    @endif
                                >
                                    {{ $country->help_cta_button_text }}
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            @endif
                        </div>
                    @endif

                </div>
            @endif

            @if($hasLegalDisclaimer)
                <div class="country-legal-disclaimer">
                    <span class="country-disclaimer-icon">
                        <i class="bi bi-info-circle"></i>
                    </span>

                    <div class="country-disclaimer-content">
                        {!! $country->legal_disclaimer !!}
                    </div>
                </div>
            @endif

        </div>
    </section>
@endif
{{-- =============== HELP AND LEGAL SECTION END =============== --}}
@endsection
