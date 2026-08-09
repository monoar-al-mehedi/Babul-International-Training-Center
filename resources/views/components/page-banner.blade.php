@props([
    'title',
    'current' => null,
])

@php
    $currentLabel = $current ?? $title;
@endphp

<section class="page-banner">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ $title }}</h1>

        <nav class="page-breadcrumbs" aria-label="Breadcrumb">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current" aria-current="page">{{ $currentLabel }}</li>
            </ol>
        </nav>
    </div>
</section>
