@extends('admin.layout')
@section('title', 'Create User')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4">
                <h5 class="fw-bold mb-0 text-dark">Add New User</h5>
            </div>
            <div class="card-body px-4 py-4">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3 border-start border-primary border-4 ps-3 py-1 bg-light rounded-end">
                        <small class="text-muted text-uppercase fw-semibold" style="letter-spacing: 0.5px;">Account Details</small>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
                        <label for="name">Full Name *</label>
                        @error('name')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                        <label for="email">Email Address *</label>
                        @error('email')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4 mt-4 border-start border-danger border-4 ps-3 py-1 bg-light rounded-end">
                        <small class="text-muted text-uppercase fw-semibold" style="letter-spacing: 0.5px;">Security</small>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password *</label>
                        @error('password')
                            <div class="invalid-feedback fw-semibold">{{ $message }}</div>
                        @else
                            <div class="form-text mt-2"><i class="bi bi-info-circle me-1"></i> Minimum 8 characters required.</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between mt-5 pt-3 border-top">
                        <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary px-4 fw-semibold"><i class="bi bi-x-circle me-1"></i> Cancel</a>
                        <button type="submit" class="btn btn-primary px-4 fw-bold shadow-sm"><i class="bi bi-save me-1"></i> Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
