@php
    $services = [
        [
            'title' => 'Overseas Job Placement Services',
            'image' => 'images/services/job-placement.png',
            'excerpt' => 'Secure your dream job abroad with Babul ITC. We connect skilled workers with overseas empl...',
        ],
        [
            'title' => 'Professional Manpower Training for Overseas Employment',
            'image' => 'images/services/manpower-training.png',
            'excerpt' => 'Prepare for international jobs with Babul ITC professional training programs. We offer pra...',
        ],
        [
            'title' => 'Visa & Documentation Assistance for Overseas Workers',
            'image' => 'images/services/visa-documentation.png',
            'excerpt' => 'Comprehensive orientation sessions before overseas deployment.',
        ],
        [
            'title' => 'Travel & Ticketing Services for Overseas Employees',
            'image' => 'images/services/travel-ticketing.png',
            'excerpt' => 'Get reliable travel arrangements with Babul ITC. We provide flight bookings, airport picku...',
        ],
        [
            'title' => 'Career Counseling & Job Guidance',
            'image' => 'images/services/career-counseling.png',
            'excerpt' => 'Babul ITC offers expert career counseling to guide you in choosing the best overseas job o...',
        ],
        [
            'title' => 'Post-Placement Support for Overseas Workers',
            'image' => 'images/services/post-placement.png',
            'excerpt' => 'Babul ITC ensures ongoing support after overseas job placement, including accommodation as...',
        ],
    ];
@endphp

<section id="services" class="services section py-5">
    <div class="section-title text-center mb-5">
        <span class="section-badge">What We Offer</span>

        <h2 class="mt-3">
            Our <span>Core Services</span>
        </h2>

        <p class="mx-auto">
            Explore our professional training programs designed to build practical skills,
            enhance career opportunities, and prepare you for success in today's competitive world.
        </p>
    </div>

    <div class="container">
        <div class="row g-4">
            @foreach ($services as $service)
                <x-service-card
                    :title="$service['title']"
                    :image="$service['image']"
                    :excerpt="$service['excerpt']"
                />
            @endforeach
        </div>
    </div>
</section>
