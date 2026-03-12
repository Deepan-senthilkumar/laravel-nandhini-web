@extends('layouts.app')

@section('title', 'My Profile | Nandhini Silks')

@section('content')
    <main class="account-page">
        <div class="page-shell">
            <div class="breadcrumb">
                <a href="{{ url('/') }}">Home</a> &nbsp; / &nbsp; <a href="{{ url('my-account') }}">My Account</a> &nbsp; /
                &nbsp; <span>My Profile</span>
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
                        <li class="account-nav-item"><a href="{{ url('my-profile') }}"
                                class="account-nav-link active"><span>My Profile</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('my-addresses') }}"
                                class="account-nav-link"><span>Addresses</span></a></li>
                        <li class="account-nav-item"><a href="{{ url('wishlist') }}"
                                class="account-nav-link"><span>Wishlist</span></a></li>
                        <li class="account-nav-item"><a href="#" class="account-nav-link logout"><span>Logout</span></a>
                        </li>
                    </ul>
                </aside>

                <!-- Profile Content -->
                <div class="account-content">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h1 class="section-title" style="font-size: 24px;">My Profile</h1>
                    </div>

                    <form class="profile-card" method="POST" action="{{ url('my-profile/update') }}">
                        @csrf
                        <div class="profile-header-edit">
                            <div class="profile-pic-container">
                                <img src="https://ui-avatars.com/api/?name=User&background=ffecf0&color=d63384" alt="User"
                                    class="profile-pic">
                                <div class="edit-pic-btn">📷</div>
                            </div>
                            <div>
                                <h3 style="margin-bottom: 5px;">User Name</h3>
                                <p style="color: #999; font-size: 13px;">Manage your personal information and security.</p>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" value="User Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Email Address <span class="verify-badge">✓ Verified</span></label>
                                <input type="email" class="form-control" name="email" value="user@example.com">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" name="phone" value="+91 98765 43210">
                            </div>
                        </div>

                        <div style="margin-top: 40px;">
                            <button type="submit" class="btn-save">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection