@extends('layouts.app')

@section('title', 'My Reviews | Nandhini Silks')

@section('content')
    <main class="account-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <a href="{{ url('my-account') }}">My Account</a> &nbsp; /
                &nbsp; <span>My Reviews</span>
            </div>

            <div class="account-layout">
                <!-- Sidebar -->
                <aside class="account-sidebar">
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
                        <li class="account-nav-item"><a href="{{ url('my-orders') }}" class="account-nav-link"><span>My
                                    Orders</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-profile') }}" class="account-nav-link"><span>My
                                    Profile</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-addresses') }}"
                                class="account-nav-link"><span>Addresses</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-reviews') }}"
                                class="account-nav-link active"><span>My Reviews</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('wishlist') }}"
                                class="account-nav-link"><span>Wishlist</span></a></li>
                        <li class="account-nav-item"><a href="#" class="account-nav-link logout"><span>Logout</span></a>
                        </li>
                    </ul>
                </aside>

                <!-- Reviews Content -->
                <div class="account-content">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h1 class="section-title" style="font-size: 24px;">My Reviews</h1>
                    </div>

                    <div class="review-tabs">
                        <div class="review-tab active">Published Reviews</div>
                        <div class="review-tab">Pending Reviews</div>
                    </div>

                    <div id="publishedReviews">
                        <p
                            style="color: #666; font-size: 14px; padding: 20px; text-align: center; background: #f9f9f9; border-radius: 8px;">
                            You haven't published any reviews yet.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection