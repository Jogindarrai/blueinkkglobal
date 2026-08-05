@extends('layouts.app')
@section('title', 'Trademark Registration by Country | Blue Inkk Global')
@section('meta_description',
    'Explore trademark registration requirements, procedures, fees and timelines across countries with Blue Inkk Global.'
)
@section('content')
@php
    $countries = [
        [
            'name' => 'Nepal',
            'slug' => 'nepal',
            'region' => 'asia',
            'flag' => 'np',
        ],
    ];
@endphp

{{-- Hero --}}
<section class="countries-hero">
    <div class="container">
        <div class="row align-items-center g-4">

            <div class="col-lg-8">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb countries-breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="breadcrumb-item active" aria-current="page">
                            Trademark Registration by Country
                        </li>
                    </ol>
                </nav>

                <span class="countries-hero-label">
                    Global Trademark Services
                </span>

                <h1>Trademark Registration by Country</h1>

                <p>
                    Explore country-specific trademark registration
                    requirements, filing procedures, government fees,
                    timelines, renewal rules and local agent requirements.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="countries-summary-card">
                    <span class="countries-summary-icon">
                        <i class="bi bi-globe2"></i>
                    </span>

                    <div>
                        <strong>{{ count($countries) }}</strong>

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
    </div>
</section>

{{-- Directory --}}
<section class="countries-directory-section">
    <div class="container">

        <div class="countries-directory-header">
            <div>
                <span class="countries-section-label">
                    Country Directory
                </span>

                <h2>Select a Country</h2>

                <p>
                    Search by country name or filter the directory by region.
                </p>
            </div>

            <div class="country-search">
                <i class="bi bi-search"></i>

                <input
                    type="search"
                    id="countrySearch"
                    placeholder="Search country..."
                    aria-label="Search country"
                    autocomplete="off"
                >
            </div>
        </div>

        {{-- Region filters --}}
        <div class="country-region-filters" aria-label="Country regions">
            <button
                type="button"
                class="country-filter-btn active"
                data-region="all"
            >
                All Countries
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="asia"
            >
                Asia
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="europe"
            >
                Europe
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="middle-east"
            >
                Middle East
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="africa"
            >
                Africa
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="north-america"
            >
                North America
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="south-america"
            >
                South America
            </button>

            <button
                type="button"
                class="country-filter-btn"
                data-region="oceania"
            >
                Oceania
            </button>
        </div>

        <div class="countries-results-bar">
            <p>
                Showing
                <strong id="visibleCountryCount">
                    {{ count($countries) }}
                </strong>
                countries
            </p>
        </div>

        {{-- Country cards --}}
        <div class="row g-3" id="countriesGrid">
                @foreach($countries as $country)
                    <div
                        class="col-xl-3 col-lg-4 col-md-6 country-column"
                        data-name="{{ strtolower($country['name']) }}"
                        data-region="{{ $country['region'] }}">
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
                                <strong>{{ $country['name'] }}</strong>
                                <small>Trademark Registration</small>
                            </span>

                            <span class="country-directory-arrow">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                @endforeach

        </div>

        {{-- No results --}}
        <div class="countries-empty-state" id="countriesEmptyState">
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

{{-- Final CTA --}}
<section class="countries-cta-section">
    <div class="container">
        <div class="countries-cta">

            <div class="countries-cta-content">
                <span class="countries-cta-icon">
                    <i class="bi bi-chat-dots"></i>
                </span>

                <div>
                    <h2>Can’t Find the Country You Need?</h2>

                    <p>
                        Write to us at
                        <a href="mailto:global.ipr@blueinkk.com">
                            global.ipr@blueinkk.com
                        </a>
                        or fill out our Connect With Us form and our team
                        will guide you.
                    </p>
                </div>
            </div>

            <a href="#connect-with-us" class="countries-cta-btn" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                Connect With Us
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('countrySearch');
    const filterButtons = document.querySelectorAll('.country-filter-btn');
    const countryColumns = document.querySelectorAll('.country-column');
    const resultCount = document.getElementById('visibleCountryCount');
    const emptyState = document.getElementById('countriesEmptyState');

    let selectedRegion = 'all';

    function filterCountries() {
        const searchValue = searchInput.value.trim().toLowerCase();
        let visibleCount = 0;

        countryColumns.forEach(function (column) {
            const countryName = column.dataset.name;
            const countryRegion = column.dataset.region;

            const matchesSearch = countryName.includes(searchValue);

            const matchesRegion =
                selectedRegion === 'all' ||
                countryRegion === selectedRegion;

            const shouldShow = matchesSearch && matchesRegion;

            column.hidden = !shouldShow;

            if (shouldShow) {
                visibleCount++;
            }
        });

        resultCount.textContent = visibleCount;
        emptyState.classList.toggle('show', visibleCount === 0);
    }

    searchInput.addEventListener('input', filterCountries);

    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            selectedRegion = button.dataset.region;

            filterButtons.forEach(function (item) {
                item.classList.remove('active');
            });

            button.classList.add('active');

            filterCountries();
        });
    });
});
</script>
@endpush