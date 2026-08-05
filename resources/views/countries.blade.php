@extends('layouts.app')

@section('title', 'Trademark Registration by Country | Blue Inkk Global')

@section(
    'meta_description',
    'Explore trademark registration requirements, procedures, fees and timelines across countries with Blue Inkk Global.'
)

@section('content')

@php
    $countries = config('trademark_countries', []);
@endphp

{{-- =========================================================
     HERO SECTION
========================================================= --}}
<section class="countries-hero">
    <div class="container">

        <div class="row align-items-center g-4">

            {{-- Hero content --}}
            <div class="col-lg-8">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb countries-breadcrumb">

                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>

                        <li
                            class="breadcrumb-item active"
                            aria-current="page"
                        >
                            Trademark Registration by Country
                        </li>

                    </ol>
                </nav>

                <span class="countries-hero-label">
                    Global Trademark Services
                </span>

                <h1>
                    Trademark Registration by Country
                </h1>

                <p class="countries-hero-description">
                    Explore country-specific trademark registration
                    requirements, filing procedures, government fees,
                    timelines, renewal rules and local agent requirements.
                </p>

            </div>

            {{-- Country count --}}
            <div class="col-lg-4">

                <div class="countries-summary-card">

                    <span class="countries-summary-icon">
                        <i class="bi bi-globe2"></i>
                    </span>

                    <div>
                        <strong>
                            {{ count($countries) }}
                        </strong>

                        <span>
                            {{ count($countries) === 1
                                ? 'Country Available'
                                : 'Countries Available' }}
                        </span>

                        <small>
                            Country-specific trademark filing support
                        </small>
                    </div>

                </div>

            </div>

        </div>

        {{-- Highlighted country search --}}
        <div class="countries-hero-search">

            <x-country-search
                :countries="$countries"
                directory-target="#countriesGrid"
                input-id="countrySearch"
            />

        </div>

    </div>
</section>


{{-- =========================================================
     COUNTRY DIRECTORY
========================================================= --}}
<section class="countries-directory-section">
    <div class="container">

        {{-- Region filters --}}
        <div
            class="country-region-filters"
            aria-label="Filter countries by region"
        >

            <button
                type="button"
                class="country-filter-btn active"
                data-region="all"
                aria-pressed="true"
            >
                All Countries
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="asia"
                aria-pressed="false"
            >
                Asia
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="europe"
                aria-pressed="false"
            >
                Europe
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="middle-east"
                aria-pressed="false"
            >
                Middle East
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="africa"
                aria-pressed="false"
            >
                Africa
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="north-america"
                aria-pressed="false"
            >
                North America
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="south-america"
                aria-pressed="false"
            >
                South America
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="oceania"
                aria-pressed="false"
            >
                Oceania
            </button>

        </div>

        {{-- Result count --}}
        <div class="countries-results-bar">
            <p>
                Showing

                <strong id="visibleCountryCount">
                    {{ count($countries) }}
                </strong>

                {{ count($countries) === 1 ? 'country' : 'countries' }}
            </p>
        </div>

        {{-- Country cards --}}
        <div class="row g-3" id="countriesGrid">

            @foreach($countries as $country)

                <div
                    class="col-xl-3 col-lg-4 col-md-6 country-column"
                    data-name="{{ strtolower($country['name']) }}"
                    data-region="{{ $country['region'] }}"
                >

                    <a
                        href="{{ url('/trademark-registration-' . $country['slug']) }}"
                        class="country-directory-card"
                    >

                        <span class="country-directory-flag">

                            <span
                                class="fi fi-{{ $country['flag'] }} country-flag"
                                role="img"
                                aria-label="{{ $country['name'] }} flag"
                            ></span>

                        </span>

                        <span class="country-directory-content">

                            <strong>
                                {{ $country['name'] }}
                            </strong>

                            <small>
                                Trademark Registration
                            </small>

                        </span>

                        <span class="country-directory-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>

                    </a>

                </div>

            @endforeach

        </div>

        {{-- Empty result --}}
        <div
            class="countries-empty-state"
            id="countriesEmptyState"
        >

            <span>
                <i class="bi bi-search"></i>
            </span>

            <h3>No country found</h3>

            <p>
                Try another country name or select a different region.
            </p>

        </div>

    </div>
</section>


{{-- =========================================================
     FINAL CTA
========================================================= --}}
<section class="countries-cta-section">
    <div class="container">

        <div class="countries-cta">

            <div class="countries-cta-content">

                <span class="countries-cta-icon">
                    <i class="bi bi-chat-dots"></i>
                </span>

                <div>

                    <h2>
                        Can’t Find the Country You Need?
                    </h2>

                    <p>
                        Write to us at

                        <a href="mailto:global.ipr@blueinkk.com">
                            global.ipr@blueinkk.com
                        </a>

                        or fill out our enquiry form and our team will
                        guide you.
                    </p>

                </div>

            </div>

            <button
                type="button"
                class="countries-cta-btn"
                data-bs-toggle="modal"
                data-bs-target="#enquiryModal"
            >
                Connect With Us
                <i class="bi bi-arrow-right"></i>
            </button>

        </div>

    </div>
</section>

@endsection