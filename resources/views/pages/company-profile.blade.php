@extends('layouts.app')

@section('title', 'Company Profile | Babul International Training Center - BITC')
@section('meta_description', 'Company profile of Babul International Training Center — professional training, visa processing, and ethical overseas recruitment.')

@section('content')
    <x-page-banner title="Company Profile" />

    <section class="company-hero section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="company-eyebrow">Company Profile</span>

                    <h1 class="company-hero-title">
                        Babul International Training Center
                    </h1>

                    <p class="company-hero-lead">
                        <span class="company-license">License: TRAD/DNCC/007984/2026</span>
                        Empowering skilled professionals through quality training,
                        ethical manpower recruitment, and complete overseas employment
                        solutions.
                    </p>

                    <p class="company-hero-text">
                        Babul International Training Center (BITC) is a trusted
                        manpower training and overseas recruitment organization
                        committed to preparing skilled workers for international
                        employment opportunities. We provide professional training,
                        visa processing support, documentation assistance, and
                        ethical recruitment services that comply with international
                        standards.
                    </p>
                </div>

                <div class="col-lg-6">
                    <img
                        src="{{ asset('images/about/company-profile.png') }}"
                        alt="Babul International Training Center"
                        class="company-hero-image"
                        loading="lazy"
                        width="800"
                        height="560"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="company-who section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="mt-0">Who We Are</h2>
                <p class="mx-auto">
                    Babul International Training Center is dedicated to developing
                    skilled manpower for the global workforce. Our organization
                    believes that proper training, professional guidance, and ethical
                    recruitment create better opportunities for both employees and employers.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="company-feature-card">
                        <i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                        <h4>Professional Training</h4>
                        <p>Industry-focused training programs designed to prepare candidates for overseas employment.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="company-feature-card">
                        <i class="bi bi-passport-fill" aria-hidden="true"></i>
                        <h4>Visa Processing</h4>
                        <p>Complete visa documentation and application support for international employment.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="company-feature-card">
                        <i class="bi bi-globe2" aria-hidden="true"></i>
                        <h4>Overseas Recruitment</h4>
                        <p>Connecting skilled professionals with reputable employers across the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-vm section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="company-vm-card">
                        <i class="bi bi-eye-fill" aria-hidden="true"></i>
                        <h3>Our Vision</h3>
                        <p>
                            To become one of Bangladesh's leading international
                            manpower training and recruitment organizations,
                            recognized globally for professionalism, integrity,
                            and excellence.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="company-vm-card">
                        <i class="bi bi-bullseye" aria-hidden="true"></i>
                        <h3>Our Mission</h3>
                        <p>
                            To prepare skilled professionals through quality
                            training, provide transparent recruitment services,
                            and create sustainable international career
                            opportunities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-why section">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="mt-0">Why Choose Us</h2>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="company-why-item">
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <h5>Ethical Recruitment</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="company-why-item">
                        <i class="bi bi-award-fill" aria-hidden="true"></i>
                        <h5>Experienced Team</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="company-why-item">
                        <i class="bi bi-people-fill" aria-hidden="true"></i>
                        <h5>Skilled Workforce</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="company-why-item">
                        <i class="bi bi-globe-americas" aria-hidden="true"></i>
                        <h5>Global Opportunities</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-cta section">
        <div class="container">
            <div class="company-cta-box">
                <h2>Build Your International Career With Confidence</h2>
                <p>
                    We prepare skilled professionals and connect them with
                    trusted employers around the world.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg company-cta-btn">
                    Contact Us
                </a>
            </div>
        </div>
    </section>
@endsection
