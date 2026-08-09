<nav id="navmenu" class="navmenu" aria-label="Primary">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        </li>
        <li class="dropdown">
            <a href="#">
                <span>Company</span>
                <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ route('director.profile') }}" class="{{ request()->routeIs('director.profile') ? 'active' : '' }}">Director Profile</a></li>
                <li><a href="{{ route('company.profile') }}" class="{{ request()->routeIs('company.profile') ? 'active' : '' }}">Company Profile</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                <li><a href="{{ route('branches') }}" class="{{ request()->routeIs('branches') ? 'active' : '' }}">Branch Offices</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
        </li>
        <li>
            <a href="{{ route('events.index') }}" class="{{ request()->routeIs('events.*') ? 'active' : '' }}">Events</a>
        </li>
        <li>
            <a href="{{ route('circulars.index') }}" class="{{ request()->routeIs('circulars.*') ? 'active' : '' }}">Circular</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        </li>
    </ul>
</nav>
