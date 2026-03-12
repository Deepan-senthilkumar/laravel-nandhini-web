@extends('layouts.app')

@section('title', 'My Addresses | Nandhini Silks')

@section('content')
    <main class="account-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <a href="{{ url('my-account') }}">My Account</a> &nbsp; /
                &nbsp; <span>Addresses</span>
            </div>

            <div class="account-layout">
                <!-- Sidebar -->
                <aside class="account-sidebar">
                    <div class="account-user-info">
                        <div class="account-avatar">
                            <img src="{{ asset('images/user-avatar.svg') }}" alt="User Avatar">
                        </div>
                        <h2 class="account-user-name">John Doe</h2>
                        <p class="account-user-email">john.doe@example.com</p>
                    </div>

                    <ul class="account-nav">
                        <li class="account-nav-item"><a href="{{ url('my-account') }}"
                                class="account-nav-link"><span>Dashboard</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-orders') }}" class="account-nav-link"><span>My
                                    Orders</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-profile') }}" class="account-nav-link"><span>My
                                    Profile</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-addresses') }}"
                                class="account-nav-link active"><span>Addresses</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-reviews') }}"
                                class="account-nav-link"><span>My Reviews</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('wishlist') }}"
                                class="account-nav-link"><span>Wishlist</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('login') }}" class="account-nav-link logout"><span>Logout</span></a></li>
                    </ul>
                </aside>

                <!-- Addresses Content -->
                <div class="account-content">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h1 class="section-title" style="font-size: 24px;">Saved Addresses</h1>
                    </div>

                    <div class="address-grid">
                        <!-- Default Address -->
                        <div class="address-card-v3 default">
                            <span class="default-badge-v3">Default</span>
                            <h3 class="address-name-v3">John Doe (Home)</h3>
                            <div class="address-details-v3">
                                416/9 Aranmanai Street, S.V. Nagaram<br>
                                Arni, Tamil Nadu - 632317<br>
                                India<br>
                                Phone: +91 98765 43210
                            </div>
                            <div class="address-actions-v3">
                                <a href="#" class="address-action-v3">Edit</a>
                            </div>
                        </div>

                        <!-- Add New Address Button -->
                        <a href="#" class="btn-add-address" id="addAddressBtn">
                            <span style="font-size: 24px;">+</span>
                            <span>Add New Address</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
