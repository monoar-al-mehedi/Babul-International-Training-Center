@props([
    'title',
    'image',
    'excerpt',
    'badge' => 'Service',
])

<div class="col-6 col-lg-4">
    <div class="service-card h-100">
        <div class="service-image">
            <img
                src="{{ asset($image) }}"
                alt="{{ $title }}"
                loading="lazy"
                width="480"
                height="330"
            >
            <span class="service-badge">{{ $badge }}</span>
        </div>

        <div class="service-content">
            <h5>{{ $title }}</h5>
            <p>{{ $excerpt }}</p>
        </div>
    </div>
</div>
