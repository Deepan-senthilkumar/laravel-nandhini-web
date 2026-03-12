@extends('layouts.app')

@section('title', 'Checkout | Nandhini Silks')

@push('styles')
<style>
    .checkout-step-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 800px;
      margin: 0 auto 40px auto;
      background: #fff;
      padding: 20px 40px;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    }
    .step-item {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 600;
      color: #999;
      flex: 1;
      justify-content: center;
      position: relative;
    }
    .step-item:not(:last-child)::after {
        content: "";
        position: absolute;
        right: -20px;
        top: 50%;
        width: 15px;
        height: 2px;
        background: #eee;
    }
    .payment-option-v3 {
      border: 1px solid #ddd;
      border-radius: 12px;
      padding: 20px;
      display: flex;
      align-items: center;
      gap: 15px;
      background: #fff;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .payment-option-v3.active {
      border-color: var(--pink);
      background: #fff9fa;
    }
    .step-item.completed {
        color: #2e7d32;
    }
    .completed .step-num {
        background: #e8f5e9;
        color: #2e7d32;
    }
    .address-card {
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 15px;
        position: relative;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #fafafa;
    }
    .address-card.active {
        border-color: var(--pink);
        background: #fff;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .address-label-badge {
        font-size: 10px;
        text-transform: uppercase;
        background: #eee;
        padding: 2px 8px;
        border-radius: 4px;
        margin-bottom: 8px;
        display: inline-block;
    }
    .btn-step {
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        height: 48px;
    }
    .btn-next {
        background: var(--pink);
        color: #fff;
        border: 1px solid var(--pink);
    }
    .btn-next:hover {
        background: #a91b43;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(148, 4, 55, 0.2);
    }
    .btn-prev {
        background: #fff;
        color: #333;
        border: 1px solid #ddd;
    }
    .btn-prev:hover {
        background: #fafafa;
        border-color: #333;
        transform: translateY(-2px);
    }
    .review-section-box {
        background: #fdfdfd;
        border: 1px solid #eee;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .review-title {
        font-size: 14px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .review-content {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
    }
</style>
@endpush

@section('content')
<main class="cart-page" style="background: #fffcf0; padding-top: 40px;">
    <div class="page-shell">
        <div class="checkout-grid" style="display: grid; grid-template-columns: 1fr 350px; gap: 40px;">
            <div class="checkout-main">
                <!-- Step 1: Delivery Address -->
                <div id="step-1" class="checkout-step-content">
                    <div class="checkout-section">
                        <h2 class="checkout-title">Select Delivery Address</h2>
                        <div class="saved-addresses" style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 30px;">
                            <div class="address-card active" onclick="selectAddress(this)">
                                <span class="address-label-badge" style="background: #e3f2fd; color: #1565c0;">Home</span>
                                <div style="font-weight: 600; margin-bottom: 5px;">Raswanth Sabarish</div>
                                <div class="address-text" style="font-size: 13px; color: #666;">
                                    416/9 Aranmanai Street, S.V. Nagaram<br>
                                    Arni, Tamil Nadu - 632317<br>
                                    Phone: +91 96295 52822
                                </div>
                            </div>
                            <div class="address-card" onclick="selectAddress(this)">
                                <span class="address-label-badge">Work</span>
                                <div style="font-weight: 600; margin-bottom: 5px;">Raswanth Sabarish</div>
                                <div class="address-text" style="font-size: 13px; color: #666;">
                                    Ocean Softwares, Main Road<br>
                                    Chennai, Tamil Nadu - 600001<br>
                                    Phone: +91 96295 52822
                                </div>
                            </div>
                        </div>

                        <div style="margin-bottom: 20px; padding-top: 20px; border-top: 1px dashed #ddd;">
                            <button class="btn-step btn-prev" id="toggleNewAddr" style="margin-bottom: 25px; padding: 10px 25px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                <span style="font-size: 18px;">+</span> Add New Address
                            </button>
                            
                            <div id="newAddressForm" style="display: none;">
                                <h3 style="font-size: 16px; margin-bottom: 20px; color: var(--pink);">New Shipping Address</h3>
                                <div class="form-grid">
                                    <div class="form-group"><label class="form-label">Full Name</label><input type="text" class="form-input" placeholder="Enter full name"></div>
                                    <div class="form-group"><label class="form-label">Phone Number</label><input type="tel" class="form-input" placeholder="Enter phone number"></div>
                                    <div class="form-group full-width"><label class="form-label">Address Line 1</label><input type="text" class="form-input" placeholder="House/Flat No, Apartment"></div>
                                    <div class="form-group full-width"><label class="form-label">Address Line 2</label><input type="text" class="form-input" placeholder="Street, Sector, Landmark"></div>
                                    <div class="form-group"><label class="form-label">City</label><input type="text" class="form-input"></div>
                                    <div class="form-group"><label class="form-label">State</label><input type="text" class="form-input"></div>
                                    <div class="form-group"><label class="form-label">Postal Code</label><input type="text" class="form-input"></div>
                                    <div class="form-group"><label class="form-label">Country</label><input type="text" class="form-input" value="India"></div>
                                    <div class="form-group full-width">
                                        <label class="form-label">Address Label</label>
                                        <div style="display: flex; gap: 20px;">
                                            <label style="display: flex; align-items: center; gap: 5px; font-size: 14px;"><input type="radio" name="label" checked> Home</label>
                                            <label style="display: flex; align-items: center; gap: 5px; font-size: 14px;"><input type="radio" name="label"> Work</label>
                                            <label style="display: flex; align-items: center; gap: 5px; font-size: 14px;"><input type="radio" name="label"> Other</label>
                                        </div>
                                    </div>
                                    <div class="form-group full-width">
                                        <label style="display: flex; align-items: center; gap: 10px; font-size: 14px; cursor: pointer;">
                                            <input type="checkbox"> Set as Default Address
                                        </label>
                                    </div>
                                </div>
                                <div style="margin-top: 15px; display: flex; gap: 10px;">
                                    <button class="btn-step btn-next" style="padding: 10px 25px;">Save Address</button>
                                    <button class="btn-step btn-prev" onclick="document.getElementById('newAddressForm').style.display='none'; document.getElementById('toggleNewAddr').style.display='flex';" style="padding: 10px 25px;">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
                            <button class="btn-step btn-next" onclick="goToStep(2)">Proceed to Payment</button>
                        </div>
                    </div>
                </div>

                <!-- Step 2: Payment Method -->
                <div id="step-2" class="checkout-step-content" style="display: none;">
                    <div class="checkout-section">
                        <h2 class="checkout-title">Payment Method</h2>
                        <div class="payment-option-v3 active">
                            <img src="https://razorpay.com/favicon.png" width="24" alt="Razorpay">
                            <div style="flex: 1;">
                                <div style="font-weight: 700;">Razorpay</div>
                                <div style="font-size: 13px; color: #666;">Pay securely via UPI, Cards, NetBanking or Wallets</div>
                            </div>
                            <div style="width: 20px; height: 20px; border-radius: 50%; border: 6px solid var(--pink);"></div>
                        </div>
                        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
                            <button class="btn-step btn-prev" onclick="goToStep(1)">Back</button>
                            <button class="btn-step btn-next" onclick="goToStep(3)">Review Order</button>
                        </div>
                    </div>
                </div>

                <!-- Step 3: Order Review -->
                <div id="step-3" class="checkout-step-content" style="display: none;">
                    <div class="checkout-section">
                        <h2 class="checkout-title">Review & Place Order</h2>
                        
                        <div class="review-section-box">
                            <div class="review-title">Delivery Address <a href="#" onclick="goToStep(1)" style="color: var(--pink); font-size: 12px; text-decoration: none;">Change</a></div>
                            <div class="review-content">
                                <strong>Raswanth Sabarish (Home)</strong><br>
                                416/9 Aranmanai Street, S.V. Nagaram<br>
                                Arni, Tamil Nadu - 632317<br>
                                Phone: +91 96295 52822
                            </div>
                        </div>

                        <div class="review-section-box">
                            <div class="review-title">Payment Details</div>
                            <div class="review-content" style="display: flex; gap: 40px;">
                                <div>
                                    <div style="font-size: 12px; color: #999;">Method</div>
                                    <div style="font-weight: 600;">Standard Delivery (Free)</div>
                                </div>
                                <div>
                                    <div style="font-size: 12px; color: #999;">Payment</div>
                                    <div style="font-weight: 600;">Razorpay</div>
                                </div>
                            </div>
                        </div>

                        <div class="review-section-box">
                            <div class="review-title">Items in Order</div>
                            <div class="review-items-list">
                                <div style="display: flex; gap: 15px; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #f5f5f5;">
                                    <img src="{{ asset('images/product_detail.png') }}" width="60" height="75" style="object-fit: cover; border-radius: 4px;">
                                    <div style="flex: 1;">
                                        <div style="font-weight: 600;">Royal Gold Silk Saree</div>
                                        <div style="font-size: 12px; color: #666;">Qty: 1 | Color: Gold</div>
                                        <div style="font-weight: 700; color: var(--pink); margin-top: 5px;">₹7,490</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" id="termsGroup" style="margin: 30px 0;">
                            <label style="display: flex; align-items: center; gap: 12px; font-size: 14px; cursor: pointer;">
                                <input type="checkbox" id="termsAgree" required> I agree to the <a href="{{ url('terms-conditions') }}" style="color: var(--pink);">Terms and Conditions</a> and <a href="{{ url('privacy-policy') }}" style="color: var(--pink);">Privacy Policy</a>
                            </label>
                            <span class="error-msg" id="termsErrorMsg" style="display: block; opacity: 0; pointer-events: none; margin-top: 10px;">Confirm Checkbox</span>
                        </div>

                        <div style="display: flex; justify-content: space-between; margin-top: 30px;">
                            <button class="btn-step btn-prev" onclick="goToStep(2)">Back</button>
                            <button class="btn-step btn-next" style="padding: 12px 60px; font-size: 18px;" onclick="placeOrder()">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Summary Side -->
            <aside class="cart-summary">
                <h2 class="summary-title" style="margin-bottom: 15px;">Order Summary</h2>
                
                <div class="summary-row"><span>Subtotal (2 items)</span><span>₹15,990</span></div>
                <div class="summary-row"><span>Delivery Charges</span><span style="color: #2e7d32;">FREE</span></div>
                <div class="summary-row"><span>GST (5%)</span><span>₹800</span></div>
                
                <div style="margin: 20px 0; padding: 15px; background: #f9f9f9; border-radius: 8px;">
                    <div style="font-size: 13px; font-weight: 600; margin-bottom: 10px;">Apply Coupon</div>
                    <div style="display: flex; gap: 10px;">
                        <input type="text" placeholder="Enter code" style="flex: 1; padding: 8px; border: 1px solid #ddd; border-radius: 4px; font-size: 13px;">
                        <button style="padding: 8px 15px; background: #333; color: #fff; border: none; border-radius: 4px; font-size: 12px; cursor: pointer;">Apply</button>
                    </div>
                </div>

                <div class="summary-total" style="border-top: 2px solid #eee; padding-top: 15px; font-size: 22px;">
                    <span>Grand Total</span>
                    <span>₹16,790</span>
                </div>

                <div style="text-align: center; margin-top: 25px; padding-top: 20px; border-top: 1px solid #eee;">
                    <img src="{{ asset('images/security.svg') }}" width="16" alt="" style="vertical-align: middle;">
                    <span style="font-size: 12px; color: #999;">100% Secure Transaction</span>
                    <div style="margin-top: 10px; display: flex; justify-content: center; gap: 10px; opacity: 0.6;">
                        <img src="https://razorpay.com/favicon.png" width="18" alt="Razorpay">
                        <span style="font-size: 10px; font-weight: 700;">RAZORPAY SECURED</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    function selectAddress(el) {
        document.querySelectorAll('.address-card').forEach(card => card.classList.remove('active'));
        el.classList.add('active');
    }

    document.getElementById('toggleNewAddr').onclick = function() {
        this.style.display = 'none';
        document.getElementById('newAddressForm').style.display = 'block';
    };

    function goToStep(num) {
        // Toggle Nav Bar State
        document.querySelectorAll('.step-item').forEach((item, index) => {
            if (index + 1 < num) {
                item.classList.add('completed');
                item.classList.remove('active');
            } else if (index + 1 === num) {
                item.classList.add('active');
                item.classList.remove('completed');
            } else {
                item.classList.remove('active', 'completed');
            }
        });

        // Hide all steps, show target
        document.querySelectorAll('.checkout-step-content').forEach(step => step.style.display = 'none');
        document.getElementById('step-' + num).style.display = 'block';

        // Scroll to top of section
        window.scrollTo({ top: 100, behavior: 'smooth' });
    }

    function placeOrder() {
        const agreed = document.getElementById('termsAgree').checked;
        const group = document.getElementById('termsGroup');
        const error = document.getElementById('termsErrorMsg');
        
        if (!agreed) {
            group.classList.add('has-error');
            error.style.opacity = '1';
            return;
        } else {
            group.classList.remove('has-error');
            error.style.opacity = '0';
        }
        
        // Final Place Order Logic
        window.location.href = "{{ url('order-confirmation') }}";
    }
</script>
@endpush
