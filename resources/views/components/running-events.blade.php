@php
    $events = collect(config('events'))->take(9);
@endphp

<section id="events" class="events section py-5">
    <div class="section-title text-center mb-5">
        <span class="section-badge">Explore Event Programs</span>

        <h2 class="mt-3">
            Our <span>Running Events</span>
        </h2>

        <p class="mx-auto">
            Explore active programs, workshops, and training sessions currently open for participation.
        </p>
    </div>

    <div class="container">
        <div class="row g-4">
            @foreach ($events as $event)
                <x-event-card
                    :title="$event['title']"
                    :image="$event['image']"
                    :date="$event['date']"
                    :organizer="$event['organizer']"
                    :category="$event['category']"
                    :excerpt="$event['excerpt']"
                    :slug="$event['slug']"
                />
            @endforeach
        </div>
    </div>
</section>
