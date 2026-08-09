@extends('layouts.app')

@section('title', $circular['title'].' | '.config('app.name'))
@section('meta_description', $circular['excerpt'] ?? $circular['title'])

@section('content')
    <x-page-banner title="Circular Details" :current="$circular['title']" />

    <section class="detail-page section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="detail-media">
                        <img
                            src="{{ asset($circular['image']) }}"
                            alt="{{ $circular['title'] }}"
                            class="detail-image"
                            loading="eager"
                            width="640"
                            height="860"
                        >
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="detail-content">
                        <h1>{{ $circular['title'] }}</h1>

                        @if (!empty($circular['excerpt']))
                            <p class="detail-excerpt">{{ $circular['excerpt'] }}</p>
                        @endif

                        <p class="detail-note">
                            এই নিয়োগ বিজ্ঞপ্তি সম্পর্কে আরও জানতে আমাদের অফিসে যোগাযোগ করুন।
                        </p>

                        <div class="detail-actions">
                            <a href="{{ route('contact') }}" class="btn contact-submit-btn">Contact Us</a>
                            <a href="{{ route('circulars.index') }}" class="btn branch-map-btn">Back to Circulars</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
