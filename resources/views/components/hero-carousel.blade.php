@php
    $slides = [
        [
            'image' => 'images/banners/slide-1.png',
            'alt' => 'Build Your Future: Precision for the World — Babul International Training Center',
            'title' => 'We Are Professional',
            'text' => 'We provide reliable overseas recruitment and work permit solutions with professionalism and integrity.',
            'link' => route('about'),
        ],
        [
            'image' => 'images/banners/slide-2.png',
            'alt' => 'Building Skills, Creating Opportunities, Connecting Futures — Babul International Training Center',
            'title' => 'Trusted Visa Processing',
            'text' => 'Our expert team ensures smooth and fast visa documentation for overseas employment.',
            'link' => route('services'),
        ],
        [
            'image' => 'images/banners/slide-3.png',
            'alt' => 'Build Your Future, Prepared for the World — Babul International Training Center',
            'title' => 'Skill Development Training',
            'text' => 'Professional training programs to prepare candidates for international job opportunities.',
            'link' => route('services'),
        ],
    ];
@endphp

<section id="hero" class="hero-carousel-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            @foreach ($slides as $index => $slide)
                <button
                    type="button"
                    data-bs-target="#heroCarousel"
                    data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}"
                    aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $index + 1 }}"
                ></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img
                        src="{{ asset($slide['image']) }}"
                        class="hero-slide-image"
                        alt="{{ $slide['alt'] }}"
                        @if ($index === 0) fetchpriority="high" @else loading="lazy" @endif
                        width="1600"
                        height="700"
                    >

                    <div class="hero-caption-wrap">
                        <div class="hero-caption">
                            <h2>{{ $slide['title'] }}</h2>
                            <p>{{ $slide['text'] }}</p>
                            <a href="{{ $slide['link'] }}" class="btn hero-caption-btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev hero-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous slide">
            <span class="hero-arrow-btn" aria-hidden="true">
                <i class="bi bi-chevron-left"></i>
            </span>
        </button>
        <button class="carousel-control-next hero-arrow" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next slide">
            <span class="hero-arrow-btn" aria-hidden="true">
                <i class="bi bi-chevron-right"></i>
            </span>
        </button>
    </div>
</section>
