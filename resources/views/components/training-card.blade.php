@props([
    'title',
    'image',
    'session',
    'date',
    'duration',
    'trainer',
])

<div class="col-xl-4 col-lg-4 col-md-6 col-12">
    <div class="card training-card h-100 shadow-sm">
        <img
            src="{{ asset($image) }}"
            class="card-img-top training-img"
            alt="{{ $title }}"
            loading="lazy"
            width="400"
            height="230"
        >

        <div class="card-body d-flex flex-column">
            <h5 class="card-title mb-3">{{ $title }}</h5>

            <p class="text-muted mb-2">
                <strong>Session:</strong> {{ $session }}
            </p>

            <p class="mb-1">
                <strong>Date:</strong> {{ $date }}
            </p>

            <p class="mb-1">
                <strong>Duration:</strong> {{ $duration }}
            </p>

            <p class="mb-3">
                <strong>Trainer:</strong> {{ $trainer }}
            </p>
        </div>
    </div>
</div>
