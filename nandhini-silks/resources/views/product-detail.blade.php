@extends('layouts.app')

@section('title', ($product->name ?? 'Product') . ' | Nandhini Silks')

@section('content')
    <main class="product-detail-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; 
                <a href="{{ url('sarees') }}">Sarees</a> &nbsp; / &nbsp;
                <span>{{ $product->name }}</span>
            </div>

            <div class="product-detail-grid">
                <!-- Gallery Section -->
                <div class="product-gallery">
                    <div class="main-product-image" id="zoomContainer">
                        <img src="{{ $product->image_path ? asset('images/' . $product->image_path) : asset('images/pro.png') }}" alt="{{ $product->name }}" id="mainImg">
                    </div>
                    <div class="product-thumbnails">
                        <div class="thumbnail active" onclick="changeImg('{{ $product->image_path ? asset('images/' . $product->image_path) : asset('images/pro.png') }}', this)">
                            <img src="{{ $product->image_path ? asset('images/' . $product->image_path) : asset('images/pro.png') }}" alt="Main View">
                        </div>
                        <!-- Additional thumbnails could be added here if defined in model -->
                    </div>
                </div>

                <!-- Info Section -->
                <div class="product-info-details">
                    <div class="product-meta">
                        <p class="product-brand">{{ $product->category->name ?? 'Nandhini Silks Exclusive' }}</p>
                        <p class="product-meta-item">SKU: <span class="product-sku">NS-{{ strtoupper(Str::slug($product->name)) }}</span></p>
                    </div>

                    <h1 class="product-title-detail">{{ $product->name }}</h1>

                    <div class="product-rating">
                        <div class="stars">★★★★★</div>
                        <span>(4.8 Rating • 12 Reviews)</span>
                    </div>

                    <div class="product-price-section">
                        <span class="current-price">₹{{ number_format($product->price, 0) }}</span>
                    </div>

                    <div class="stock-status">
                        @if($product->stock > 0)
                            <span class="stock-badge stock-in">● In Stock ({{ $product->stock }} left)</span>
                        @else
                            <span class="stock-badge stock-out" style="color: #666;">● Out of Stock</span>
                        @endif
                    </div>

                    <div class="product-description-short">
                        {!! $product->description !!}
                    </div>

                    <!-- Quantity / Actions -->
                    <div class="product-actions-group" style="margin-top: 30px;">
                        <div class="quantity-picker" style="margin-bottom: 20px;">
                            <button class="qty-btn" onclick="updateQty(-1)">−</button>
                            <input type="text" class="qty-input" value="1" readonly id="qtyDisp">
                            <button class="qty-btn" onclick="updateQty(1)">+</button>
                        </div>

                        <div class="product-actions">
                            <button class="btn-add-cart">
                                Add to Cart
                            </button>
                            <button class="btn-buy-now">
                                Buy It Now
                            </button>
                            <button class="btn-wishlist-detail" aria-label="Add to Wishlist">
                                <img src="{{ asset('images/favorite.svg') }}" alt="" width="24">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail Tabs Sections -->
            <div class="product-extra-info"
                style="margin-top: 60px; background: #fff; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                <div class="tabs-info">
                    <button class="tab-btn active" onclick="switchTab(event, 'tabDesc')">Full Description</button>
                    <button class="tab-btn" onclick="switchTab(event, 'tabSpecs')">Specifications</button>
                    <button class="tab-btn" onclick="switchTab(event, 'tabReviews')">Reviews</button>
                    <button class="tab-btn" onclick="switchTab(event, 'tabShipping')">Shipping & Returns</button>
                </div>

                <div class="tab-pane active" id="tabDesc">
                    <div style="color: #666; line-height: 1.8;">
                        {!! $product->description !!}
                    </div>
                </div>

                <div class="tab-pane" id="tabSpecs" style="display: none;">
                    <table class="specs-table">
                        <tr>
                            <td class="specs-label">Category</td>
                            <td class="specs-value">{{ $product->category->name ?? 'Saree' }}</td>
                        </tr>
                        <tr>
                            <td class="specs-label">Stock Status</td>
                            <td class="specs-value">{{ $product->stock > 0 ? 'Available' : 'Out of Stock' }}</td>
                        </tr>
                    </table>
                </div>

                <div class="tab-pane" id="tabReviews" style="display: none;">
                    <p>No reviews yet for this product.</p>
                </div>

                <div class="tab-pane" id="tabShipping" style="display: none;">
                    <div style="color: #666; line-height: 1.8;">
                        <h4 style="color: #333;">Domestic Shipping (India)</h4>
                        <li>Standard Delivery: 5-7 business days.</li>
                        <li>Express Delivery: 2-3 business days.</li>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        function changeImg(src, thumb) {
            document.getElementById('mainImg').src = src;
            const thumbs = document.querySelectorAll('.thumbnail');
            thumbs.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
        }
        function updateQty(val) {
            const input = document.getElementById('qtyDisp');
            let current = parseInt(input.value);
            current += val;
            if (current < 1) current = 1;
            input.value = current;
        }
        function switchTab(e, tabId) {
            const btns = document.querySelectorAll('.tab-btn');
            btns.forEach(b => b.classList.remove('active'));
            e.currentTarget.classList.add('active');
            const panes = document.querySelectorAll('.tab-pane');
            panes.forEach(p => p.style.display = 'none');
            document.getElementById(tabId).style.display = 'block';
        }
    </script>
@endpush