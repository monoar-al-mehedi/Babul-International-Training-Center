@props([
    'title',
    'image',
    'date',
    'slug',
    'organizer' => null,
    'category' => null,
    'excerpt' => null,
])

<div class="col-lg-4 col-md-6">
    <article class="event-card h-100">
        <div class="event-card-image">
            <img
                src="{{ asset($image) }}"
                alt="{{ $title }}"
                loading="lazy"
                width="480"
                height="640"
            >
            <span class="event-card-date">{{ $date }}</span>
        </div>

        <div class="event-card-body">
            <h3 class="event-card-title">{{ $title }}</h3>

            @if ($organizer || $category)
                <div class="event-card-meta">
                    @if ($organizer)
                        <div class="event-card-meta-item">
                            <i class="bi bi-person" aria-hidden="true"></i>
                            <span>{{ $organizer }}</span>
                        </div>
                    @endif

                    @if ($organizer && $category)
                        <span class="event-card-meta-sep">/</span>
                    @endif

                    @if ($category)
                        <div class="event-card-meta-item">
                            <i class="bi bi-folder2" aria-hidden="true"></i>
                            <span>{{ $category }}</span>
                        </div>
                    @endif
                </div>
            @endif

            @if ($excerpt)
                <p class="event-card-excerpt">{{ $excerpt }}</p>
            @endif

            <hr class="event-card-divider">

            <a href="{{ route('events.show', $slug) }}" class="event-card-link stretched-link">
                <span>View Detail</span>
                <i class="bi bi-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </article>
</div>
