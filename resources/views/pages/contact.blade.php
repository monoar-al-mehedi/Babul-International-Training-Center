@extends('layouts.app')

@section('title', 'Contact Us | Babul International Training Center - BITC')
@section('meta_description', 'Contact BIWPS for fast, reliable international work permit and visa services in Bangladesh.')

@section('content')
    <x-page-banner title="Contact Us" />

    <section id="contact" class="contact-page">
        <div class="contact-map-wrap">
            <iframe
                title="Babul International Training Center location map"
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6425.536453948559!2d90.36876056583975!3d23.875195442772217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1773343035959!5m2!1sen!2sbd"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
            ></iframe>
        </div>

        <div class="container contact-main">
            @if (session('success'))
                <div class="alert alert-success contact-alert" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row g-4 g-xl-5 align-items-stretch">
                <div class="col-lg-5">
                    <div class="contact-info-panel h-100">
                        <span class="contact-eyebrow">Get in touch</span>
                        <h2>We're here to help you start your overseas journey</h2>
                        <p class="contact-intro">
                            Contact BIWPS for fast, reliable international work permit and visa services.
                        </p>

                        <div class="contact-info-list">
                            <div class="contact-info-item">
                                <span class="contact-info-icon" aria-hidden="true">
                                    <i class="bi bi-geo-alt"></i>
                                </span>
                                <div>
                                    <h3>Location</h3>
                                    <p>
                                        দিয়াবাড়ি, গোলচত্বর (মেট্রো স্টেশন ডিপো) মেম্বার বাড়ি রোড,
                                        উত্তরা, Dhaka-1230, Bangladesh
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <span class="contact-info-icon" aria-hidden="true">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <div>
                                    <h3>Email</h3>
                                    <p>
                                        <a href="mailto:info@biwps.com">info@biwps.com</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <span class="contact-info-icon" aria-hidden="true">
                                    <i class="bi bi-telephone"></i>
                                </span>
                                <div>
                                    <h3>Call</h3>
                                    <p>
                                        <a href="tel:+8801609674606">+880 01609 674 606</a>
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <span class="contact-info-icon" aria-hidden="true">
                                    <i class="bi bi-clock"></i>
                                </span>
                                <div>
                                    <h3>Office Hours</h3>
                                    <p>Saturday – Thursday<br>9:00 AM – 6:00 PM</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-quick-actions">
                            <a href="tel:+8801609674606" class="contact-quick-btn">
                                <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                                Call Now
                            </a>
                            <a
                                href="https://wa.me/8801918829697?text=Hello%20BIWPS,%20I%20have%20a%20query."
                                class="contact-quick-btn contact-quick-btn-whatsapp"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-panel h-100">
                        <h2>Send us a message</h2>
                        <p>Fill out the form and our team will get back to you shortly.</p>

                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form" novalidate>
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}"
                                        placeholder="Enter your full name"
                                        required
                                    >
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}"
                                        placeholder="name@example.com"
                                        required
                                    >
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="phone" class="form-label">Phone <span class="text-muted">(optional)</span></label>
                                    <input
                                        type="text"
                                        name="phone"
                                        id="phone"
                                        class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ old('phone') }}"
                                        placeholder="+880 1XXX-XXXXXX"
                                    >
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input
                                        type="text"
                                        name="subject"
                                        id="subject"
                                        class="form-control @error('subject') is-invalid @enderror"
                                        value="{{ old('subject') }}"
                                        placeholder="How can we help you?"
                                        required
                                    >
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea
                                        name="message"
                                        id="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        rows="6"
                                        placeholder="Write your message here..."
                                        required
                                    >{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn contact-submit-btn">
                                        Send Message
                                        <i class="bi bi-send-fill" aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
