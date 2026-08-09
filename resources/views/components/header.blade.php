<header id="header" class="site-header sticky-top">
    <div class="container position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="brand-logo me-auto" aria-label="{{ config('app.name') }}">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Babul International Training Center Logo"
                class="brand-logo-img"
                width="220"
                height="64"
            >
        </a>

        @include('components.navbar')

        <div class="header-social-links">
            <a href="https://www.facebook.com/babulitc" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/babulitc" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                <i class="bi bi-instagram"></i>
            </a>
        </div>

        <button type="button" class="mobile-nav-toggle d-xl-none bi bi-list" aria-label="Toggle navigation"></button>
    </div>
</header>
