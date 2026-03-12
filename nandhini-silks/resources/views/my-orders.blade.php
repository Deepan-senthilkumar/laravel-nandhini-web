@extends('layouts.app')

@section('title', 'My Orders | Nandhini Silks')

@section('content')
    <main class="account-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <a href="{{ url('my-account') }}">My Account</a> &nbsp; /
                &nbsp; <span>My Orders</span>
            </div>

            <div class="account-layout">
                <!-- Sidebar -->
                <aside class="account-sidebar">
                    <!-- Sidebar contents identical to dashboard -->
                    <div class="account-user-info">
                        <div class="account-avatar">
                            <img src="https://ui-avatars.com/api/?name=User&background=ffecf0&color=d63384"
                                alt="User Avatar">
                        </div>
                        <h2 class="account-user-name">User Name</h2>
                        <p class="account-user-email">user@example.com</p>
                    </div>

                    <ul class="account-nav">
                        <li class="account-nav-item"><a href="{{ url('my-account') }}"
                                class="account-nav-link"><span>Dashboard</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-orders') }}"
                                class="account-nav-link active"><span>My Orders</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-profile') }}" class="account-nav-link"><span>My
                                    Profile</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-addresses') }}"
                                class="account-nav-link"><span>Addresses</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('wishlist') }}"
                                class="account-nav-link"><span>Wishlist</span></a></li>
                        <li class="account-nav-item"><a href="#" class="account-nav-link logout"><span>Logout</span></a>
                        </li>
                    </ul>
                </aside>

                <!-- Orders Content -->
                <div class="account-content">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h1 class="section-title" style="font-size: 24px;">My Orders</h1>
                    </div>

                    <div class="orders-container">
                        <div class="order-card">
                            <div class="order-header">
                                <div class="order-meta">
                                    <div class="meta-item">
                                        <span class="meta-label">Order ID</span>
                                        <span class="meta-value">#NS7842</span>
                                    </div>
                                    <div class="meta-item">
                                        <span class="meta-label">Date Placed</span>
                                        <span class="meta-value">Oct 12, 2023</span>
                                    </div>
                                    <div class="meta-item">
                                        <span class="meta-label">Total Amount</span>
                                        <span class="meta-value">₹7,490 <span
                                                class="payment-status pay-paid">Paid</span></span>
                                    </div>
                                </div>
                                <span class="status-badge status-processing">Processing</span>
                            </div>
                            <div class="order-body">
                                <div class="order-items-preview">
                                    <img src="{{ asset('images/pro1.png') }}" alt="" class="order-img">
                                    <span class="order-items-count">+ 2 other items</span>
                                </div>
                                <div class="order-actions">
                                    <a href="{{ url('order-detail') }}" class="btn-outline">View Details</a>
                                    <button class="btn-action">Track Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection