@extends('layouts.app')

@section('title', 'Account Dashboard | Nandhini Silks')

@section('content')
    <main class="account-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <span>My Account</span>
            </div>

            <div class="account-layout">
                <!-- Account Sidebar -->
                <aside class="account-sidebar">
                    <div class="account-user-info">
                        <div class="account-avatar">
                            <img src="{{ asset('images/user-avatar.png') }}" alt="User Avatar"
                                onerror="this.src='https://ui-avatars.com/api/?name=User&background=ffecf0&color=d63384'">
                        </div>
                        <h2 class="account-user-name">User Name</h2>
                        <p class="account-user-email">user@example.com</p>
                    </div>

                    <ul class="account-nav">
                        <li class="account-nav-item"><a href="{{ url('my-account') }}"
                                class="account-nav-link active"><span>Dashboard</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-orders') }}" class="account-nav-link"><span>My
                                    Orders</span></a></li>
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

                <!-- Account Content -->
                <div class="account-content">
                    <div class="dashboard-welcome">
                        <h1 class="dashboard-title">Welcome back!</h1>
                        <p class="dashboard-subtitle">From your account dashboard you can view your recent orders, manage
                            your shipping and billing addresses, and edit your password and account details.</p>
                    </div>

                    <div class="dashboard-stats">
                        <a href="{{ url('my-orders') }}" class="stat-card">
                            <div class="stat-icon">📦</div>
                            <div class="stat-info">
                                <span class="stat-value">0</span>
                                <span class="stat-label">Total Orders</span>
                            </div>
                        </a>
                        <a href="{{ url('wishlist') }}" class="stat-card">
                            <div class="stat-icon">❤️</div>
                            <div class="stat-info">
                                <span class="stat-value">0</span>
                                <span class="stat-label">In Wishlist</span>
                            </div>
                        </a>
                    </div>

                    <div class="dashboard-grid">
                        <div class="dashboard-section">
                            <div class="section-header">
                                <h3 class="section-title">Recent Orders</h3>
                                <a href="{{ url('my-orders') }}" class="view-all-link">View All</a>
                            </div>
                            <div class="order-list">
                                <p
                                    style="color: #666; font-size: 14px; padding: 20px; text-align: center; background: #f9f9f9; border-radius: 8px;">
                                    No recent orders found.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection