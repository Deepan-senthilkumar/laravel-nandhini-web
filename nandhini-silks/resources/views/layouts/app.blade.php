<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Nandhini Silks')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')

</head>

<body>
    <header class="top-header">
        <div class="page-shell header-row">
            <a href="{{ url('/') }}" class="brand" style="text-decoration: none;">
                <img class="brand" src="{{ asset('images/image 1.png') }}" alt="Logo" />
            </a>

            <div class="search-wrap">
                <div class="search-box">
                    <img src="{{ asset('images/search.svg') }}" alt="Search" />
                    <input type="text" placeholder="Search" aria-label="Search" />
                </div>
            </div>

            <div class="actions">
                <button class="icon-btn" type="button" aria-label="Favorites"
                    onclick="window.location.href='{{ url('wishlist') }}'">
                    <img src="{{ asset('images/favorite.svg') }}" alt="" width="18" height="23">
                </button>
                <button class="icon-btn" type="button" aria-label="Cart"
                    onclick="window.location.href='{{ url('cart') }}'">
                    <img src="{{ asset('images/local_mall.svg') }}" alt="" width="14" height="20" />
                    <span class="cart-count">5</span>
                </button>
                <button class="login-btn" type="button" onclick="window.location.href='{{ url('login') }}'">Sign in /
                    Login</button>
            </div>
        </div>
    </header>

    <nav class="nav-bar" aria-label="Primary">
        <div class="nav-inner">
            <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
            <div class="nav-links" id="navLinks" style="text-decoration: none;">
                <a href="{{ url('sarees') }}" class="nav-item">Sarees</a>
                <a href="{{ url('women') }}" class="nav-item">Women</a>
                <a href="{{ url('mens') }}" class="nav-item">Mens</a>
                <a href="{{ url('kids') }}" class="nav-item">Kids</a>
                <a href="{{ url('about') }}" class="nav-item">About</a>
                <a href="{{ url('contact') }}" class="nav-item">Contact us</a>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.getElementById('menuToggle');
            const navLinks = document.getElementById('navLinks');

            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                menuToggle.classList.toggle('active');
            });
        });
    </script>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer" aria-label="Footer">
        <div class="footer-inner">
            <h2 class="footer-title">Contact us</h2>
            <p class="footer-address">Nandhini Silks <br>416/9 Aranmanai Street, S.V. Nagaram <br>Arni - 632317,
                Thiruvannamalai dist</p>

            <div class="footer-contact-grid">
                <div class="footer-contact-item">
                    <span class="footer-extra-box-1" aria-hidden="true"><img src="{{ asset('images/telephone.svg') }}"
                            alt=""></span>
                    <p class="footer-contact-text">+91 96295 52822</p>
                </div>
                <div class="footer-contact-item">
                    <span class="footer-extra-box-1" aria-hidden="true"><img src="{{ asset('images/telephone.svg') }}"
                            alt=""></span>
                    <p class="footer-contact-text">+91 99945 04410</p>
                </div>
                <div class="footer-contact-item">
                    <span class="footer-extra-box-1" aria-hidden="true"><img src="{{ asset('images/email.svg') }}"
                            alt=""></span>
                    <p class="footer-contact-text">nandhinisilks.arani@gmail.com</p>
                </div>
            </div>

            <div class="footer-extra-touch">
                <div class="footer-extra-title">Get In Touch</div>
                <div class="footer-extra-icons">
                    <div class="footer-extra-box">
                        <div class="footer-extra-glyph"><a href=""><img src="{{ asset('images/Vector4.svg') }}"
                                    alt=""></a></div>
                    </div>
                    <div class="footer-extra-box-1"><a href=""><img src="{{ asset('images/Group.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-inner">
                <ul class="footer-links">
                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('exchange-policy') }}">Exchange Policy</a></li>
                    <li><a href="{{ url('shipping-policy') }}">Shipping Policy</a></li>
                    <li><a href="{{ url('terms-conditions') }}">Terms of Service</a></li>
                    <li><a href="{{ url('fabric-care') }}">Fabric Care</a></li>
                    <li><a href="{{ url('cancellation') }}">Cancellation</a></li>
                </ul>
            </div>
        </div>
    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <p class="footer-copy">@ {{ date('Y') }} Nandhini Silks | By Reality Graphics</p>
</footer>
@stack('scripts')
</body>

</html>