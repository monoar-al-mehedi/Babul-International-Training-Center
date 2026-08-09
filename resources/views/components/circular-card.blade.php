@props([
    'title',
    'image',
    'slug',
    'excerpt' => null,
])

<div class="col-md-6 col-lg-4">
    <article class="circular-card h-100">
        <img
            src="{{ asset($image) }}"
            alt="{{ $title }}"
            class="circular-card-image"
            loading="lazy"
            width="480"
            height="360"
        >

        <div class="circular-card-body">
            <h5 class="circular-card-title">{{ $title }}</h5>

            @if ($excerpt)
                <p class="circular-card-excerpt">{{ $excerpt }}</p>
            @endif

            <button
                type="button"
                class="btn circular-view-btn"
                data-bs-toggle="modal"
                data-bs-target="#circularModal"
                data-title="{{ $title }}"
                data-excerpt="{{ $excerpt ?? 'Details for this circular will be available soon. Please contact BIWPS for more information.' }}"
                data-image="{{ asset($image) }}"
                data-url="{{ route('circulars.show', $slug) }}"
            >
                View Details
            </button>
        </div>
    </article>
</div>
