@extends('admin.layout')
@section('title', 'View User')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card shadow border-0 overflow-hidden rounded-3">
            <div class="card-header bg-primary text-white border-bottom-0 pt-4 pb-4 px-4 text-center">
                <div class="bg-white text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow" style="width: 80px; height: 80px; font-size: 2.5em; font-weight: bold;">
                    {{ strtoupper(substr($user->name, 0, 1)) }}
                </div>
                <h4 class="fw-bold mb-1">{{ $user->name }}</h4>
                <div class="badge bg-white text-primary px-3 py-2 rounded-pill mt-2 fw-semibold">User ID: #{{ $user->id }}</div>
            </div>
            <div class="card-body px-5 py-4 bg-light">
                <div class="row mb-4 bg-white p-3 rounded shadow-sm border">
                    <div class="col-sm-4 px-0">
                        <small class="text-muted text-uppercase fw-bold d-block mb-1" style="letter-spacing: 1px;"><i class="bi bi-envelope-fill text-primary me-2"></i>Email Address</small>
                    </div>
                    <div class="col-sm-8 px-0 text-dark fw-semibold">
                        <a href="mailto:{{ $user->email }}" class="text-decoration-none text-dark">{{ $user->email }}</a>
                    </div>
                </div>

                <div class="row mb-4 bg-white p-3 rounded shadow-sm border">
                    <div class="col-sm-4 px-0">
                        <small class="text-muted text-uppercase fw-bold d-block mb-1" style="letter-spacing: 1px;"><i class="bi bi-calendar2-check-fill text-success me-2"></i>Account Created</small>
                    </div>
                    <div class="col-sm-8 px-0 text-dark fw-semibold">
                        {{ $user->created_at->format('l, F j, Y \a\t g:i A') }}
                    </div>
                </div>

                <div class="row mb-3 bg-white p-3 rounded shadow-sm border">
                    <div class="col-sm-4 px-0">
                        <small class="text-muted text-uppercase fw-bold d-block mb-1" style="letter-spacing: 1px;"><i class="bi bi-clock-history text-warning me-2"></i>Last Updated</small>
                    </div>
                    <div class="col-sm-8 px-0 text-dark fw-semibold">
                        {{ $user->updated_at->diffForHumans() }}
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-5 pt-4 border-top">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary px-4 fw-semibold"><i class="bi bi-arrow-left me-1"></i> Back to List</a>
                    <div>
                        <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary px-4 fw-bold shadow-sm me-2"><i class="bi bi-pencil-square me-1"></i> Edit User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
