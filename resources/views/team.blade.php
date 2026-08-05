@extends('layouts.app')

@section('title', 'Our Team | Blue Inkk Global')

@section(
    'meta_description',
    'Meet the Blue Inkk Global leadership and legal team delivering strategic intellectual property and legal solutions.'
)

@section('content')

{{-- =========================================
     TEAM HERO
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
                            Our Team
                        </li>

                    </ol>
                </nav>

                <span class="team-hero-label">
                    People Behind Blue Inkk
                </span>

                <h1>Our Team</h1>

                <p>
                    Meet the professionals driving Blue Inkk’s intellectual
                    property and legal practice.
                </p>
            </div>

            <div class="col-lg-4">
                <div class="team-hero-card">

                    <span class="team-hero-icon">
                        <i class="bi bi-people"></i>
                    </span>

                    <div>
                        <strong>5</strong>
                        <span>Team Members</span>
                        <small>Leadership and legal professionals</small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


{{-- =========================================
     TEAM MEMBERS
========================================= --}}
<section class="team-section">
    <div class="container">

        <div class="team-section-heading">

            <span class="team-section-label">
                Meet Our Professionals
            </span>

            <h2>Leadership and Legal Team</h2>

        </div>

        <div class="row g-4 justify-content-center">

            {{-- Mayank Goel --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                <article class="team-card h-100">

                    <div class="team-image-wrap">
                        <img
                            src="{{ asset('images/team/founder.webp') }}"
                            alt="Mayank Goel - Founding Partner at Blue Inkk"
                            class="team-image"
                            loading="lazy"
                        >


                        <div class="team-image-overlay">
                            <span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </div>
                    </div>

                    <div class="team-card-content">
                        <span class="team-role">Founding Partner</span>
                        <h3>Mayank Goel</h3>
                    </div>

                </article>
            </div>


            {{-- Sukhveer Singh --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                <article class="team-card h-100">

                    <div class="team-image-wrap">
                        <img
                            src="{{ asset('images/team/Sukhveer-Singh.webp') }}"
                            alt="Sukhveer Singh - Partner at Blue Inkk"
                            class="team-image"
                            loading="lazy"
                        >

                        <div class="team-image-overlay">
                            <span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </div>
                    </div>

                    <div class="team-card-content">
                        <span class="team-role">Partner</span>
                        <h3>Sukhveer Singh</h3>
                    </div>

                </article>
            </div>


            {{-- Riya Gupta --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                <article class="team-card h-100">

                    <div class="team-image-wrap">
                        <img
                            src="{{ asset('images/team/Riya-Gupta.webp') }}"
                            alt="Riya Gupta - Partner at Blue Inkk"
                            class="team-image"
                            loading="lazy"
                        >

                        <div class="team-image-overlay">
                            <span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </div>
                    </div>

                    <div class="team-card-content">
                        <span class="team-role">Partner</span>
                        <h3>Riya Gupta</h3>
                    </div>

                </article>
            </div>


            {{-- Raj Priya --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                <article class="team-card h-100">

                    <div class="team-image-wrap">
                        <img
                            src="{{ asset('images/team/Raj-Priya.webp') }}"
                            alt="Raj Priya - Senior Associate at Blue Inkk"
                            class="team-image"
                            loading="lazy"
                        >

                        <div class="team-image-overlay">
                            <span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </div>
                    </div>

                    <div class="team-card-content">
                        <span class="team-role">Senior Associate</span>
                        <h3>Raj Priya</h3>
                    </div>

                </article>
            </div>


            {{-- Aditi Tiwari --}}
            <div class="col-xl-4 col-lg-4 col-md-6">
                <article class="team-card h-100">

                    <div class="team-image-wrap">
                        <img
                           src="{{ asset('images/team/ADITI-TIWARI.webp') }}"
                            alt="Aditi Tiwari - Senior Associate at Blue Inkk"
                            class="team-image"
                            loading="lazy"
                        >

                        <div class="team-image-overlay">
                            <span>
                                <i class="bi bi-arrow-up-right"></i>
                            </span>
                        </div>
                    </div>

                    <div class="team-card-content">
                        <span class="team-role">Senior Associate</span>
                        <h3>Aditi Tiwari</h3>
                    </div>

                </article>
            </div>

        </div>

    </div>
</section>

@endsection