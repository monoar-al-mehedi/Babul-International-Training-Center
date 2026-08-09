@extends('layouts.app')

@section('title', 'International Hiring Circulars | Babul International Training Center - BITC')
@section('meta_description', 'Browse international hiring circulars from Babul International Training Center for overseas job opportunities.')

@php
    $allCirculars = collect(config('circulars'));
    $perPage = 9;
    $total = $allCirculars->count();
    $lastPage = max(1, (int) ceil($total / $perPage));
    $currentPage = max(1, min($lastPage, (int) request('page', 1)));
    $circulars = $allCirculars->forPage($currentPage, $perPage)->values();
    $from = $total ? (($currentPage - 1) * $perPage + 1) : 0;
    $to = min($total, $currentPage * $perPage);
@endphp

@section('content')
    <x-page-banner title="Circulars" />

    <section id="circulars" class="circulars-page section">
        <div class="container">
            <div class="row g-4">
                @foreach ($circulars as $circular)
                    <x-circular-card
                        :title="$circular['title']"
                        :image="$circular['image']"
                        :excerpt="$circular['excerpt']"
                        :slug="$circular['slug']"
                    />
                @endforeach
            </div>

            @if ($lastPage > 1)
                <div class="circulars-pagination mt-5">
                    <p class="circulars-pagination-info">
                        Showing
                        <strong>{{ $from }}</strong>
                        to
                        <strong>{{ $to }}</strong>
                        of
                        <strong>{{ $total }}</strong>
                        results
                    </p>

                    <nav aria-label="Circulars pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                                @if ($currentPage <= 1)
                                    <span class="page-link" aria-disabled="true">&laquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('circulars.index', ['page' => $currentPage - 1]) }}" rel="prev" aria-label="Previous">&laquo;</a>
                                @endif
                            </li>

                            @for ($page = 1; $page <= $lastPage; $page++)
                                <li class="page-item {{ $page === $currentPage ? 'active' : '' }}">
                                    <a class="page-link" href="{{ route('circulars.index', ['page' => $page]) }}">{{ $page }}</a>
                                </li>
                            @endfor

                            <li class="page-item {{ $currentPage >= $lastPage ? 'disabled' : '' }}">
                                @if ($currentPage >= $lastPage)
                                    <span class="page-link" aria-disabled="true">&raquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('circulars.index', ['page' => $currentPage + 1]) }}" rel="next" aria-label="Next">&raquo;</a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>

    <div class="modal fade" id="circularModal" tabindex="-1" aria-labelledby="circularModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="circularModalLabel">Circular Details</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" class="circular-modal-image mb-3" id="circularModalImage">
                    <p class="circular-modal-excerpt mb-0" id="circularModalExcerpt"></p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn circular-modal-link" id="circularModalLink">Open Full Page</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById('circularModal');
            if (!modal) {
                return;
            }

            modal.addEventListener('show.bs.modal', (event) => {
                const button = event.relatedTarget;
                if (!button) {
                    return;
                }

                document.getElementById('circularModalLabel').textContent = button.dataset.title || 'Circular Details';
                document.getElementById('circularModalExcerpt').textContent = button.dataset.excerpt || '';
                document.getElementById('circularModalImage').src = button.dataset.image || '';
                document.getElementById('circularModalImage').alt = button.dataset.title || '';
                document.getElementById('circularModalLink').href = button.dataset.url || '#';
            });
        });
    </script>
@endpush
