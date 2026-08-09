@extends('layouts.app')

@section('title', 'Running Events | Babul International Training Center - BITC')
@section('meta_description', 'Explore running events and overseas recruitment programs from Babul International Training Center.')

@php
    $allEvents = collect(config('events'));
    $perPage = 9;
    $total = $allEvents->count();
    $lastPage = max(1, (int) ceil($total / $perPage));
    $currentPage = max(1, min($lastPage, (int) request('page', 1)));
    $events = $allEvents->forPage($currentPage, $perPage)->values();
    $from = $total ? (($currentPage - 1) * $perPage + 1) : 0;
    $to = min($total, $currentPage * $perPage);
@endphp

@section('content')
    <x-page-banner title="Events" />

    <section class="events events-page section py-5">
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

            @if ($lastPage > 1)
                <div class="events-pagination mt-5">
                    <p class="events-pagination-info">
                        Showing
                        <strong>{{ $from }}</strong>
                        to
                        <strong>{{ $to }}</strong>
                        of
                        <strong>{{ $total }}</strong>
                        results
                    </p>

                    <nav aria-label="Events pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                                @if ($currentPage <= 1)
                                    <span class="page-link" aria-disabled="true">&laquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('events.index', ['page' => $currentPage - 1]) }}" rel="prev" aria-label="Previous">&laquo;</a>
                                @endif
                            </li>

                            @for ($page = 1; $page <= $lastPage; $page++)
                                <li class="page-item {{ $page === $currentPage ? 'active' : '' }}">
                                    <a class="page-link" href="{{ route('events.index', ['page' => $page]) }}">{{ $page }}</a>
                                </li>
                            @endfor

                            <li class="page-item {{ $currentPage >= $lastPage ? 'disabled' : '' }}">
                                @if ($currentPage >= $lastPage)
                                    <span class="page-link" aria-disabled="true">&raquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('events.index', ['page' => $currentPage + 1]) }}" rel="next" aria-label="Next">&raquo;</a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>
@endsection
