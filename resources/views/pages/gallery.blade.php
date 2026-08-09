@extends('layouts.app')

@section('title', 'Our Galleries | Babul International Training Center - BITC')
@section('meta_description', 'Photo gallery of Babul International Training Center — training sessions, events, and campus moments.')

@php
    $allImages = collect(range(1, 22))->map(function ($n) {
        return [
            'src' => 'images/gallery/gallery-'.str_pad((string) $n, 2, '0', STR_PAD_LEFT).'.jpg',
            'title' => 'BIWPS - Image Gallery '.$n,
        ];
    });

    $perPage = 12;
    $total = $allImages->count();
    $lastPage = (int) ceil($total / $perPage);
    $currentPage = max(1, min($lastPage, (int) request('page', 1)));
    $images = $allImages->forPage($currentPage, $perPage)->values();
    $from = ($currentPage - 1) * $perPage + 1;
    $to = min($total, $currentPage * $perPage);
@endphp

@section('content')
    <x-page-banner title="Our Photo Gallery" />

    <section class="gallery-page section">
        <div class="container">
            <div class="row g-4">
                @foreach ($images as $index => $image)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="gallery-card">
                            <a
                                href="{{ asset($image['src']) }}"
                                class="gallery-link"
                                data-gallery="bitc-gallery"
                                data-title="{{ $image['title'] }}"
                            >
                                <img
                                    src="{{ asset($image['src']) }}"
                                    alt="{{ $image['title'] }}"
                                    loading="lazy"
                                    width="400"
                                    height="230"
                                >
                            </a>

                            <div class="gallery-overlay">
                                <span>{{ $image['title'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($lastPage > 1)
                <div class="gallery-pagination mt-5">
                    <p class="gallery-pagination-info">
                        Showing
                        <strong>{{ $from }}</strong>
                        to
                        <strong>{{ $to }}</strong>
                        of
                        <strong>{{ $total }}</strong>
                        results
                    </p>

                    <nav aria-label="Gallery pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item {{ $currentPage <= 1 ? 'disabled' : '' }}">
                                @if ($currentPage <= 1)
                                    <span class="page-link" aria-disabled="true">&laquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('gallery', ['page' => $currentPage - 1]) }}" rel="prev" aria-label="Previous">&laquo;</a>
                                @endif
                            </li>

                            @for ($page = 1; $page <= $lastPage; $page++)
                                <li class="page-item {{ $page === $currentPage ? 'active' : '' }}">
                                    <a class="page-link" href="{{ route('gallery', ['page' => $page]) }}">{{ $page }}</a>
                                </li>
                            @endfor

                            <li class="page-item {{ $currentPage >= $lastPage ? 'disabled' : '' }}">
                                @if ($currentPage >= $lastPage)
                                    <span class="page-link" aria-disabled="true">&raquo;</span>
                                @else
                                    <a class="page-link" href="{{ route('gallery', ['page' => $currentPage + 1]) }}" rel="next" aria-label="Next">&raquo;</a>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            @endif
        </div>
    </section>

    <div class="gallery-lightbox" id="galleryLightbox" hidden>
        <button type="button" class="gallery-lightbox-close" aria-label="Close">&times;</button>
        <button type="button" class="gallery-lightbox-prev" aria-label="Previous image">&#10094;</button>
        <figure class="gallery-lightbox-figure">
            <img src="" alt="" id="galleryLightboxImage">
            <figcaption id="galleryLightboxCaption"></figcaption>
        </figure>
        <button type="button" class="gallery-lightbox-next" aria-label="Next image">&#10095;</button>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = Array.from(document.querySelectorAll('.gallery-link'));
            const lightbox = document.getElementById('galleryLightbox');
            const imageEl = document.getElementById('galleryLightboxImage');
            const captionEl = document.getElementById('galleryLightboxCaption');
            const closeBtn = lightbox.querySelector('.gallery-lightbox-close');
            const prevBtn = lightbox.querySelector('.gallery-lightbox-prev');
            const nextBtn = lightbox.querySelector('.gallery-lightbox-next');
            let currentIndex = 0;

            const openAt = (index) => {
                currentIndex = index;
                const link = links[currentIndex];
                imageEl.src = link.href;
                imageEl.alt = link.dataset.title || '';
                captionEl.textContent = link.dataset.title || '';
                lightbox.hidden = false;
                document.body.classList.add('gallery-lightbox-open');
            };

            const close = () => {
                lightbox.hidden = true;
                imageEl.src = '';
                document.body.classList.remove('gallery-lightbox-open');
            };

            const showPrev = () => openAt((currentIndex - 1 + links.length) % links.length);
            const showNext = () => openAt((currentIndex + 1) % links.length);

            links.forEach((link, index) => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    openAt(index);
                });
            });

            closeBtn.addEventListener('click', close);
            prevBtn.addEventListener('click', showPrev);
            nextBtn.addEventListener('click', showNext);

            lightbox.addEventListener('click', (event) => {
                if (event.target === lightbox) {
                    close();
                }
            });

            document.addEventListener('keydown', (event) => {
                if (lightbox.hidden) {
                    return;
                }

                if (event.key === 'Escape') {
                    close();
                } else if (event.key === 'ArrowLeft') {
                    showPrev();
                } else if (event.key === 'ArrowRight') {
                    showNext();
                }
            });
        });
    </script>
@endpush
