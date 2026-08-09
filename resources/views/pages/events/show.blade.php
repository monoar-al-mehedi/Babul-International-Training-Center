@extends('layouts.app')

@section('title', $event['title'].' | '.config('app.name'))
@section('meta_description', $event['excerpt'] ?? $event['title'])

@section('content')
    <x-page-banner title="Event Details" :current="$event['title']" />

    <section class="detail-page section">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-5">
                    <div class="detail-media">
                        <img
                            src="{{ asset($event['image']) }}"
                            alt="{{ $event['title'] }}"
                            class="detail-image"
                            loading="eager"
                            width="640"
                            height="860"
                        >
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="detail-content">
                        @if (!empty($event['date']))
                            <span class="detail-date">{{ $event['date'] }}</span>
                        @endif

                        <h1>{{ $event['title'] }}</h1>

                        <div class="detail-meta">
                            @if (!empty($event['organizer']))
                                <span><i class="bi bi-person" aria-hidden="true"></i> {{ $event['organizer'] }}</span>
                            @endif
                            @if (!empty($event['category']))
                                <span><i class="bi bi-folder2" aria-hidden="true"></i> {{ $event['category'] }}</span>
                            @endif
                        </div>

                        @if (!empty($event['excerpt']))
                            <p class="detail-excerpt">{{ $event['excerpt'] }}</p>
                        @endif

                        <p class="detail-note">
                            আরও বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন।
                        </p>

                        <div class="detail-actions">
                            <a href="{{ route('contact') }}" class="btn contact-submit-btn">Contact Us</a>
                            <a href="{{ route('events.index') }}" class="btn branch-map-btn">Back to Events</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
