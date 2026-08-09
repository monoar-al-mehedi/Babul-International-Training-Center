@php
    $trainings = [
        [
            'title' => 'Construction Worker Training | Session April-2026',
            'image' => 'images/trainings/construction.webp',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Month',
            'trainer' => 'BIWPS Experts',
        ],
        [
            'title' => 'Plumbing Training | Session April-2026',
            'image' => 'images/trainings/plumbing.webp',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Month',
            'trainer' => 'BIWPS Experts',
        ],
        [
            'title' => 'Electrical Technician Training | Session April-2026',
            'image' => 'images/trainings/electrical.jpg',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Months',
            'trainer' => 'BIWPS Experts',
        ],
        [
            'title' => 'Hotel & Hospitality Training | Session April-2026',
            'image' => 'images/trainings/hospitality.jpg',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Months',
            'trainer' => 'BIWPS Experts',
        ],
        [
            'title' => 'Welding Training | Session April-2026',
            'image' => 'images/trainings/welding.jpg',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Month',
            'trainer' => 'BIWPS Experts',
        ],
        [
            'title' => 'Driving Training (Heavy / Light Vehicle) | Session April-2026',
            'image' => 'images/trainings/driving.webp',
            'session' => 'April Batch 2026',
            'date' => 'Apr 01, 2026 - Jun 30, 2026',
            'duration' => '3 Month',
            'trainer' => 'BIWPS Experts',
        ],
    ];
@endphp

<section class="training section py-5">
    <div class="section-title text-center mb-5">
        <span class="section-badge">Our Training Programs</span>

        <h2 class="mt-3">
            Our <span>Training Services</span>
        </h2>

        <p class="mx-auto">
            Empowering your success through expert solutions and specialized professional services tailored to your
            needs.
        </p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @foreach ($trainings as $training)
                <x-training-card
                    :title="$training['title']"
                    :image="$training['image']"
                    :session="$training['session']"
                    :date="$training['date']"
                    :duration="$training['duration']"
                    :trainer="$training['trainer']"
                />
            @endforeach
        </div>
    </div>
</section>
