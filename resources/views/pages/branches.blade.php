@extends('layouts.app')

@section('title', 'Branch Offices | Babul International Training Center - BITC')
@section('meta_description', 'Find Babul International Training Center branch offices in Kustia, Mymensingh, and Head Office Dhaka.')

@php
    $branches = [
        [
            'name' => 'Kustia Branch',
            'image' => 'images/branches/kustia.jpg',
            'address' => 'ED Thana, Baulia Bazar, Kustia, Bangladesh',
            'phone' => '+880 1918-829697',
            'email' => 'kustia@biwps.com',
            'hours' => 'Sunday - Thursday (10:00 AM - 5:00 PM)',
            'map' => 'https://maps.google.com/?q=Baulia+Bazar+Kustia+Bangladesh',
        ],
        [
            'name' => 'Mymensingh Branch',
            'image' => 'images/branches/mymensingh.png',
            'address' => 'Dholia, Bhaluka, Mymensingh, Bangladesh',
            'phone' => '+880 1918-829697',
            'email' => 'bhaluka@biwps.com',
            'hours' => 'Sunday - Thursday (9:00 AM - 5:00 PM)',
            'map' => 'https://maps.google.com/?q=Bhaluka+Mymensingh+Bangladesh',
        ],
        [
            'name' => 'Head Office - Dhaka',
            'image' => 'images/branches/dhaka.png',
            'address' => 'দিয়াবাড়ি, গোলচত্বর (মেট্রো স্টেশন ডিপো) মেম্বার বাড়ি রোড, উত্তরা, Dhaka-1230, Bangladesh',
            'phone' => '+880 1918-829697',
            'email' => 'dhaka@biwps.com',
            'hours' => 'Saturday - Thursday (9:00 AM - 6:00 PM)',
            'map' => 'https://maps.google.com/?q=Diabari+Uttara+Dhaka+Bangladesh',
        ],
    ];
@endphp

@section('content')
    <x-page-banner title="Our Branch Offices" />

    <section class="branches-page section">
        <div class="container">
            <div class="row g-4">
                @foreach ($branches as $branch)
                    <div class="col-md-6 col-lg-4">
                        <article class="branch-card h-100">
                            <img
                                src="{{ asset($branch['image']) }}"
                                alt="{{ $branch['name'] }}"
                                class="branch-card-image"
                                loading="lazy"
                                width="480"
                                height="220"
                            >

                            <div class="branch-card-body">
                                <h5>{{ $branch['name'] }}</h5>

                                <p class="branch-meta">
                                    <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                                    <span>{{ $branch['address'] }}</span>
                                </p>

                                <p class="branch-meta">
                                    <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                                    <a href="tel:{{ preg_replace('/\s+/', '', $branch['phone']) }}">{{ $branch['phone'] }}</a>
                                </p>

                                <p class="branch-meta">
                                    <i class="bi bi-envelope-fill" aria-hidden="true"></i>
                                    <a href="mailto:{{ $branch['email'] }}">{{ $branch['email'] }}</a>
                                </p>

                                <p class="branch-meta branch-hours">
                                    <i class="bi bi-clock-fill" aria-hidden="true"></i>
                                    <span>{{ $branch['hours'] }}</span>
                                </p>

                                <a
                                    href="{{ $branch['map'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="btn branch-map-btn"
                                >
                                    View on Google Map
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
