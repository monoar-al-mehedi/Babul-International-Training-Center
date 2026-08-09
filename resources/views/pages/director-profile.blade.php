@extends('layouts.app')

@section('title', 'Director Profile | Babul International Training Center - BITC')
@section('meta_description', 'Meet Md. Babul Miah, Founder and Managing Director of Babul International Training Center.')

@section('content')
    <x-page-banner title="Director Profile" />

    <section class="director-profile section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-4">
                    <div class="director-card">
                        <img
                            src="{{ asset('images/about/director.jpg') }}"
                            alt="Md. Babul Miah"
                            class="director-photo"
                            loading="lazy"
                            width="480"
                            height="560"
                        >

                        <div class="director-card-body">
                            <h3>Md. Babul Miah</h3>
                            <span class="director-badge">Founder &amp; Managing Director</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <span class="director-eyebrow">Leadership</span>

                    <h1 class="director-heading">Meet Our Director</h1>

                    <p class="director-lead">
                        At <strong>Babul International Training Center</strong>,
                        our mission is to develop skilled professionals and connect
                        them with international employment opportunities through
                        ethical recruitment, professional training, and complete
                        visa processing support.
                    </p>

                    <p>
                        <strong>Md. Babul Miah</strong> is the Founder and Managing
                        Director of Babul International Training Center. With years
                        of experience in overseas manpower recruitment, workforce
                        development, and international employment consultancy,
                        he has successfully helped numerous candidates achieve
                        their career goals abroad.
                    </p>

                    <p>
                        Under his leadership, the organization has built a strong
                        reputation for providing professional training, transparent
                        visa processing, documentation assistance, and responsible
                        overseas recruitment services while maintaining compliance
                        with international standards.
                    </p>

                    <blockquote class="director-quote">
                        "Our commitment is not only to send workers abroad but to
                        prepare skilled professionals who can build successful
                        careers and represent Bangladesh with pride."
                    </blockquote>

                    <div class="row director-highlights">
                        <div class="col-md-6">
                            <div class="director-highlight">
                                <i class="bi bi-award" aria-hidden="true"></i>
                                <div>
                                    <h5>Experienced Leadership</h5>
                                    <p>Extensive experience in manpower recruitment and international workforce management.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="director-highlight">
                                <i class="bi bi-globe2" aria-hidden="true"></i>
                                <div>
                                    <h5>Global Vision</h5>
                                    <p>Dedicated to creating overseas employment opportunities through trusted partnerships.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="director-highlight">
                                <i class="bi bi-mortarboard" aria-hidden="true"></i>
                                <div>
                                    <h5>Skill Development</h5>
                                    <p>Focused on practical training that meets international industry standards.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="director-highlight">
                                <i class="bi bi-people" aria-hidden="true"></i>
                                <div>
                                    <h5>Ethical Recruitment</h5>
                                    <p>Committed to transparency, integrity, and responsible overseas employment services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="director-vision section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="director-vision-card">
                        <i class="bi bi-eye-fill" aria-hidden="true"></i>
                        <h3>Vision</h3>
                        <p>
                            To become one of Bangladesh's most trusted
                            international training and manpower organizations,
                            empowering individuals through skills, education,
                            and ethical overseas employment.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="director-vision-card">
                        <i class="bi bi-bullseye" aria-hidden="true"></i>
                        <h3>Mission</h3>
                        <p>
                            To provide world-class training, professional
                            guidance, visa processing support, and responsible
                            manpower recruitment while maintaining the highest
                            standards of integrity and service excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
