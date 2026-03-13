@extends('admin.layout')
@section('title', 'Edit User')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-dark">Edit Profile: {{ $user->name }}</h5>
                <span class="badge bg-secondary p-2 shadow-sm">ID: #{{ $user->id }}</span>
            </div>
            <div class="card-body px-4 py-4">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3 border-start border-primary border-4 ps-3 py-1 bg-light rounded-end">
                        <small class="text-muted text-uppercase fw-semibold" style="letter-spacing: 0.5px;">Account Details</small>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name" value="{{ old('name', $user->name) }}" required>
                        <label for="name">Full Name *</label>
                        @error('name')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email', $user->email) }}" required>
                        <label for="email">Email Address *</label>
                        @error('email')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-4 border-start border-danger border-4 ps-3 py-1 bg-light rounded-end d-flex justify-content-between align-items-center pe-3">
                        <small class="text-muted text-uppercase fw-semibold" style="letter-spacing: 0.5px;">Security Update</small>
                        <span class="badge bg-warning text-dark"><i class="bi bi-shield-lock me-1"></i> Optional</span>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror border-warning shadow-sm" style="border-width: 2px;" id="password" name="password" placeholder="New Password">
                        <label for="password" class="text-muted">Enter New Password</label>
                        @error('password')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @else
                            <div class="form-text mt-2"><i class="bi bi-info-circle me-1 text-warning"></i> Leave blank to keep current password.</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mt-5 pt-3 border-top">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary px-4 fw-semibold"><i class="bi bi-arrow-left me-1"></i> Back</a>
                        <button type="submit" class="btn btn-primary px-4 fw-bold shadow-sm"><i class="bi bi-arrow-repeat me-1"></i> Update Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
