@extends('layouts.app')

@section('title', 'Mens Collection - Nandhini Silks')

@section('content')
    <main class="category-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <span>Mens Collection</span>
            </div>

            <div class="category-layout">
                <!-- Sidebar Filters -->
                <aside class="filters-sidebar">
                    <div class="filter-group">
                        <h3 class="filter-title">Price Range</h3>
                        <div class="price-range-container">
                            <div class="slider-track">
                                <div class="slider-fill"></div>
                                <div class="slider-handle" style="left: 20%;"></div>
                                <div class="slider-handle" style="left: 80%;"></div>
                            </div>
                            <div class="range-values">
                                <span>₹500</span>
                                <span>₹20,000</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-group">
                        <h3 class="filter-title">Mens Category</h3>
                        <ul class="filter-list">
                            <li class="filter-item"><label class="filter-label"><input type="checkbox"> Pure Silk
                                    Dhotis</label></li>
                            <li class="filter-item"><label class="filter-label"><input type="checkbox"> Formal
                                    Shirts</label></li>
                            <li class="filter-item"><label class="filter-label"><input type="checkbox"> Silk Kurtas</label>
                            </li>
                            <li class="filter-item"><label class="filter-label"><input type="checkbox"> Wedding Sets</label>
                            </li>
                        </ul>
                    </div>

                    <div class="filter-group">
                        <label class="stock-toggle">
                            <span>In Stock Only</span>
                            <input type="checkbox" hidden checked>
                            <div class="toggle-switch">
                                <div class="toggle-dot"></div>
                            </div>
                        </label>
                    </div>
                </aside>

                <!-- Product Listing -->
                <section class="product-listing">
                    <!-- Filter Chips -->
                    <div class="filter-chips-section">
                        <div class="chips-container">
                            <span class="chip active">All Mens Wear</span>
                            <span class="chip">Traditional Dhotis</span>
                            <span class="chip">Silk Shirts</span>
                            <span class="chip">Kurta Pyjama</span>
                            <span class="chip">Wedding Collection</span>
                        </div>
                    </div>

                    <div class="product-listing-header">
                        <div class="header-left">
                            <span class="result-count">Showing 1-6 of 84 products</span>
                        </div>

                        <div style="display: flex; align-items: center;">
                            <div class="view-toggle">
                                <button class="view-btn active" title="Grid View">
                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                        <path
                                            d="M4 4h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 10h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4zM4 16h4v4H4zm6 0h4v4h-4zm6 0h4v4h-4z" />
                                    </svg>
                                </button>
                                <button class="view-btn" title="List View">
                                    <svg width="18" height="18" viewBox="0 0 24 24">
                                        <path
                                            d="M4 14h4v-4H4v4zm0 5h4v-4H4v4zM4 9h4V5H4v4zm5 5h12v-4H9v4zm0 5h12v-4H9v4zM9 5v4h12V5H9z" />
                                    </svg>
                                </button>
                            </div>

                            <select class="sort-select">
                                <option>Sort By: Popularity</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Newest First</option>
                            </select>
                        </div>
                    </div>

                    <div class="product-grid-main">
                        <!-- Product 1 -->
                        <article class="product-card-v2">
                            <div class="card-actions-overlay">
                                <button class="overlay-btn" aria-label="Add to Wishlist">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#666">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                </button>
                            </div>
                            <a href="{{ url('product-detail') }}" style="text-decoration: none; color: inherit;">
                                <div class="product-image-v2">
                                    <img src="{{ asset('images/mens_silk_dhoti_gold_jari_1773214227860.png') }}"
                                        alt="Pure Silk Dhoti">
                                </div>
                                <div class="product-info-v2">
                                    <div class="product-rating-v2">★★★★★</div>
                                    <span class="product-category-v2">Traditional Wear</span>
                                    <h3 class="product-name-v2">Pure Silk Dhoti with Gold Jari</h3>
                                    <p class="product-desc-v2">Premium handloom silk dhoti featuring a rich gold jari
                                        border. Ideal for weddings and traditional functions.</p>
                                    <p class="product-price-v2">₹3,490</p>
                                </div>
                            </a>
                            <button class="add-to-cart-v2">Add to Cart</button>
                        </article>

                        <!-- Product 2 -->
                        <article class="product-card-v2">
                            <div class="card-actions-overlay">
                                <button class="overlay-btn" aria-label="Add to Wishlist">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="#666">
                                        <path
                                            d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                    </svg>
                                </button>
                            </div>
                            <a href="{{ url('product-detail') }}" style="text-decoration: none; color: inherit;">
                                <div class="product-image-v2">
                                    <img src="{{ asset('images/mens_formal_silk_shirt_ivory_1773214241878.png') }}"
                                        alt="Silk Shirt">
                                </div>
                                <div class="product-info-v2">
                                    <div class="product-rating-v2">★★★★☆</div>
                                    <span class="product-category-v2">Formal Wear</span>
                                    <h3 class="product-name-v2">Ivory Silk Formal Shirt</h3>
                                    <p class="product-desc-v2">Elegant ivory silk shirt with a subtle sheen, designed for a
                                        sophisticated look at formal events.</p>
                                    <p class="product-price-v2">₹2,290</p>
                                </div>
                            </a>
                            <button class="add-to-cart-v2">Add to Cart</button>
                        </article>
                    </div>

                    <div class="load-more-container">
                        <button class="btn-load-more">Load More Products</button>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        const viewBtns = document.querySelectorAll('.view-btn');
        const productContainer = document.querySelector('.product-grid-main');
        viewBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                viewBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                if (btn.title === 'List View') {
                    productContainer.classList.add('view-list');
                } else {
                    productContainer.classList.remove('view-list');
                }
            });
        });
    </script>
@endpush