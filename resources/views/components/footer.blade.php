<footer id="footer" class="site-footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('home') }}" class="d-inline-block mb-3">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Babul International Training Center Logo"
                        class="footer-logo-img"
                        width="200"
                        height="58"
                    >
                </a>
                <p class="mb-2">
                    দিয়াবাড়ি, গোলচত্বর (মেট্রো স্টেশন ডিপো) মেম্বার বাড়ি রোড,<br>
                    উত্তরা, Dhaka-1230, Bangladesh
                </p>
                <p class="mb-1"><strong>Phone:</strong> <a href="tel:+8801609674606">+880 01609 674 606</a></p>
                <p class="mb-0"><strong>Email:</strong> <a href="mailto:info@biwps.com">info@biwps.com</a></p>
            </div>

            <div class="col-lg-2 col-md-3">
                <h4>Useful Links</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('events.index') }}">Events</a></li>
                    <li><a href="{{ route('circulars.index') }}">Circulars</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-3">
                <h4>Our Services</h4>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}">Overseas Job Placement</a></li>
                    <li><a href="{{ route('services') }}">Manpower Training</a></li>
                    <li><a href="{{ route('services') }}">Visa &amp; Documentation</a></li>
                    <li><a href="{{ route('services') }}">Travel &amp; Ticketing</a></li>
                    <li><a href="{{ route('services') }}">Career Counseling</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12">
                <h4>Follow Us</h4>
                <p>Stay connected with Babul International Training Center for the latest updates and announcements.</p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/babulitc" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/babulitc" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/8801918829697" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>

        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2">
            <div>&copy; Copyright <strong>babulitc.com</strong>. All Rights Reserved.</div>
            <div>{{ config('app.name') }}</div>
        </div>
    </div>
</footer>
