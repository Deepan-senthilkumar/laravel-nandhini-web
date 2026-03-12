@extends('layouts.app')

@section('title', 'Nandhini Silks - Home')

@section('content')
    <section class="hero" aria-label="Hero Banner">
        <div class="hero-marquee">
            <div class="hero-grid">
                <div class="hero-slide">
                    <img src="{{ asset('images/banner 1.png') }}" alt="Banner 1" />
                </div>
                <div class="hero-slide">
                    <img src="{{ asset('images/banner 1.jpg') }}" alt="Banner 2" />
                </div>
            </div>
            <div class="hero-grid" aria-hidden="true">
                <div class="hero-slide">
                    <img src="{{ asset('images/banner 1.png') }}" alt="Banner 1" />
                </div>
                <div class="hero-slide">
                    <img src="{{ asset('images/banner 1.jpg') }}" alt="Banner 2" />
                </div>
            </div>
        </div>
    </section>

    <section class="collection-section" aria-labelledby="saree-collections-title">
        <h2 id="saree-collections-title" class="collection-title">Saree Collections</h2>
        <div class="collection-marquee">
            <div class="collection-grid">
                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image.png') }}" alt="Pure Silk Saree" />
                    </div>
                    <h3 class="collection-name">Pure Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (1).png') }}" alt="Tissue Silk Saree" />
                    </div>
                    <h3 class="collection-name">Tissue Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (2).png') }}" alt="Cotton Sarees" />
                    </div>
                    <h3 class="collection-name">Cotton Sarees</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (3).png') }}" alt="Soft Silk Saree" />
                    </div>
                    <h3 class="collection-name">Soft Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (4).png') }}" alt="Banarasi Silk Saree" />
                    </div>
                    <h3 class="collection-name">Banarasi Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>
            </div>
            <div class="collection-grid" aria-hidden="true">
                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image.png') }}" alt="Pure Silk Saree" />
                    </div>
                    <h3 class="collection-name">Pure Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (1).png') }}" alt="Tissue Silk Saree" />
                    </div>
                    <h3 class="collection-name">Tissue Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (2).png') }}" alt="Cotton Sarees" />
                    </div>
                    <h3 class="collection-name">Cotton Sarees</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (3).png') }}" alt="Soft Silk Saree" />
                    </div>
                    <h3 class="collection-name">Soft Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>

                <article class="collection-card">
                    <div class="collection-image-wrap">
                        <img src="{{ asset('images/Image (4).png') }}" alt="Banarasi Silk Saree" />
                    </div>
                    <h3 class="collection-name">Banarasi Silk Saree</h3>
                    <button class="collection-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                        Now</button>
                </article>
            </div>
        </div>
    </section>

    <section class="featured-section" aria-labelledby="featured-title">
        <img class="featured-decor featured-decor-left"
            src="{{ asset('images/177ac6ca-e05e-455e-b85a-ac15d09dd31f 2.png') }}" alt="" />
        <img class="featured-decor featured-decor-right"
            src="{{ asset('images/177ac6ca-e05e-455e-b85a-ac15d09dd31f 1.png') }}" alt="" />

        <div class="featured-inner">
            <h2 id="featured-title" class="featured-title">New Arrivals</h2>
            <p class="featured-subtitle">Fresh weaves, added daily - discover sarees handwoven just for you</p>

            <div class="featured-marquee">
                <div class="featured-grid">
                    @foreach ($featuredProducts->take(4) as $product)
                    <article class="featured-card">
                        <div class="featured-media">
                            @php
                                $fallbackImage = 'images/pro' . ($loop->index > 0 ? $loop->index : '') . '.png';
                                if ($loop->index == 0) $fallbackImage = 'images/pro3.png'; // Match user's specific order if possible
                                if ($loop->index == 1) $fallbackImage = 'images/pro2.png';
                                if ($loop->index == 2) $fallbackImage = 'images/pro1.png';
                                if ($loop->index == 3) $fallbackImage = 'images/pro.png';
                            @endphp
                            <img src="{{ $product->image_path ? asset('images/' . $product->image_path) : asset($fallbackImage) }}" alt="{{ $product->name }}" />
                            @if($loop->index == 0)
                                <span class="featured-badge">New Arrival</span>
                            @elseif($loop->index == 1)
                                <span class="featured-badge">10% Off</span>
                            @elseif($loop->index == 3)
                                <span class="featured-badge">Hot Deal</span>
                            @endif
                        </div>
                        <h3 class="featured-name">{{ $product->name }}</h3>
                        <div class="featured-footer">
                            <span class="featured-price">&#8377; {{ number_format($product->price, 0) }} INR</span>
                            <button class="featured-cart" type="button" aria-label="Add {{ $product->name }} to cart">
                                <img src="{{ asset('images/Vector.svg') }}" alt="" />
                            </button>
                        </div>
                    </article>
                    @endforeach
                </div>
                <div class="featured-grid" aria-hidden="true">
                    @foreach ($featuredProducts->take(4) as $product)
                    <article class="featured-card">
                        <div class="featured-media">
                            @php
                                $fallbackImage = 'images/pro' . ($loop->index > 0 ? $loop->index : '') . '.png';
                                if ($loop->index == 0) $fallbackImage = 'images/pro3.png';
                                if ($loop->index == 1) $fallbackImage = 'images/pro2.png';
                                if ($loop->index == 2) $fallbackImage = 'images/pro1.png';
                                if ($loop->index == 3) $fallbackImage = 'images/pro.png';
                            @endphp
                            <img src="{{ $product->image_path ? asset('images/' . $product->image_path) : asset($fallbackImage) }}" alt="{{ $product->name }}" />
                            @if($loop->index == 0)
                                <span class="featured-badge">New Arrival</span>
                            @elseif($loop->index == 1)
                                <span class="featured-badge">10% Off</span>
                            @elseif($loop->index == 3)
                                <span class="featured-badge">Hot Deal</span>
                            @endif
                        </div>
                        <h3 class="featured-name">{{ $product->name }}</h3>
                        <div class="featured-footer">
                            <span class="featured-price">&#8377; {{ number_format($product->price, 0) }} INR</span>
                            <button class="featured-cart" type="button" aria-label="Add {{ $product->name }} to cart">
                                <img src="{{ asset('images/Vector.svg') }}" alt="" />
                            </button>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>

            <div class="featured-progress" aria-hidden="true">
                <span>01</span>
                <div class="featured-progress-track" data-name="Slider">
                    <div class="featured-progress-bg"></div>
                    <div class="featured-progress-fill"></div>
                </div>
                <span>04</span>
            </div>
        </div>
    </section>

    <section class="category-section" aria-labelledby="browse-categories-title">
        <h2 id="browse-categories-title" class="category-title">Browse Our Categories</h2>
        <div class="category-marquee">
            <div class="category-grid">
                <a class="category-link" href="{{ url('women') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9.png') }}" alt="Sarees" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Sarees</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('mens') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (1).png') }}" alt="Shirts" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Shirts</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (2).png') }}" alt="Girl" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Girl</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (3).png') }}" alt="Boy" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Boy</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (4).png') }}" alt="Half Saree" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Half Saree</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('mens') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image category-image--dhoti"
                                src="{{ asset('images/Rectangle 9 (5).png') }}" alt="Dhoti" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Dhoti</h3>
                    </article>
                </a>
            </div>
            <div class="category-grid" aria-hidden="true">
                <a class="category-link" href="{{ url('women') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9.png') }}" alt="Sarees" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Sarees</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('mens') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (1).png') }}" alt="Shirts" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Shirts</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (2).png') }}" alt="Girl" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Girl</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (3).png') }}" alt="Boy" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Boy</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('kids') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image" src="{{ asset('images/Rectangle 9 (4).png') }}" alt="Half Saree" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Half Saree</h3>
                    </article>
                </a>
                <a class="category-link" href="{{ url('mens') }}" style="text-decoration: none;">
                    <article class="category-card">
                        <div class="category-image-shell">
                            <img class="category-image category-image--dhoti"
                                src="{{ asset('images/Rectangle 9 (5).png') }}" alt="Dhoti" />
                            <span class="category-ring"></span>
                        </div>
                        <h3 class="category-name">Dhoti</h3>
                    </article>
                </a>
            </div>
        </div>
    </section>

    <section class="promo-section" aria-label="Promotions">
        <article class="offer-card">
            <div class="offer-image-wrap">
                <img class="offer-image" src="{{ asset('images/Rectangle 31.png') }}" alt="Special Offer" />
            </div>
            <div class="offer-content">
                <h2 class="offer-title">Up to 20% off, only for this month</h2>
                <p class="offer-text">Shop now and enjoy up to 10% off on selected items. Limited time only!</p>
                <a class="offer-link" href="{{ url('sarees') }}">
                    <span>Shop Now</span>
                    <span class="offer-link-arrow" aria-hidden="true">&#8594;</span>
                </a>
            </div>
        </article>

        <article class="wedding-card">
            <div class="wedding-image-wrap">
                <img class="wedding-image" src="{{ asset('images/image 2.png') }}" alt="Wedding collections" />
            </div>
            <div class="wedding-content">
                <svg class="wedding-heading-svg" viewBox="0 0 1000 500">
                    <defs>
                        <linearGradient id="textFill" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#A91B43" />
                            <stop offset="105%" stop-color="#F2A329" />
                        </linearGradient>
                        <radialGradient id="strokeGradient" cx="50%" cy="50%" r="40%">
                            <stop offset="0%" stop-color="#A91B43" />
                            <stop offset="50%" stop-color="#EF9F29" />
                            <stop offset="80%" stop-color="#A91B43" />
                        </radialGradient>
                    </defs>
                    <text x="0" y="180" text-anchor="start" fill="url(#textFill)" stroke="url(#strokeGradient)"
                        stroke-width="3" paint-order="stroke">
                        Wedding
                    </text>
                    <text x="0" y="400" text-anchor="start" fill="url(#textFill)" stroke="url(#strokeGradient)"
                        stroke-width="3" paint-order="stroke">
                        Collections
                    </text>
                </svg>
                <p class="wedding-text">Flamboyantly charming, the Scarlet Satin Delight Saree embodies grandeur and
                    romance. Rendered in a vivacious shade of red.</p>
                <button class="wedding-cta" type="button" onclick="window.location.href='{{ url('sarees') }}'">Shop
                    Now</button>
            </div>
        </article>
    </section>

    <section class="testimonial-section" aria-labelledby="testimonial-title">
        <p class="testimonial-kicker">Testimonial</p>
        <h2 id="testimonial-title" class="testimonial-title">Speaking from their hearts</h2>
        <div class="testimonial-vector-wrap">
            <img class="testimonial-vector" src="{{ asset('images/Vector2.svg') }}" alt="Quote icon" />
        </div>

        <div class="testimonial-marquee">
            <div class="testimonial-grid">
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Beautiful elegant <br>saree</h3>
                    <p class="testimonial-text">I recently ordered this saree online, and I am extremely happy with my
                        purchase. The saree looked exactly like the pictures shown on the website. The color was vibrant,
                        and the fabric quality was even better than I expected.</p>
                    <p class="testimonial-name">Ramya</p>
                </article>
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Stunning Design <br>& Quality</h3>
                    <p class="testimonial-text">The craftsmanship is truly exceptional. I wore it for a wedding and
                        received so many compliments. The delivery was prompt and the packaging was premium. Highly
                        recommend Nandhini Silks!</p>
                    <p class="testimonial-name">Priya</p>
                </article>
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Perfect for <br>Occasions</h3>
                    <p class="testimonial-text">Finding authentic silk sarees online can be tricky, but this was a
                        great experience. The texture is soft and the pallu design is intricate. Will definitely buy
                        more in the future.</p>
                    <p class="testimonial-name">Deepika</p>
                </article>
            </div>
            <div class="testimonial-grid" aria-hidden="true">
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Beautiful elegant <br>saree</h3>
                    <p class="testimonial-text">I recently ordered this saree online, and I am extremely happy with my
                        purchase. The saree looked exactly like the pictures shown on the website. The color was vibrant,
                        and the fabric quality was even better than I expected.</p>
                    <p class="testimonial-name">Ramya</p>
                </article>
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Stunning Design <br>& Quality</h3>
                    <p class="testimonial-text">The craftsmanship is truly exceptional. I wore it for a wedding and
                        received so many compliments. The delivery was prompt and the packaging was premium. Highly
                        recommend Nandhini Silks!</p>
                    <p class="testimonial-name">Priya</p>
                </article>
                <article class="testimonial-card">
                    <h3 class="testimonial-card-title">Perfect for <br>Occasions</h3>
                    <p class="testimonial-text">Finding authentic silk sarees online can be tricky, but this was a
                        great experience. The texture is soft and the pallu design is intricate. Will definitely buy
                        more in the future.</p>
                    <p class="testimonial-name">Deepika</p>
                </article>
            </div>
        </div>
    </section>
@endsection
