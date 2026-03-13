@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<div class="row g-4">
    <!-- Total Users Card -->
    <div class="col-md-4">
        <div class="card bg-primary text-white h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title text-uppercase mb-1" style="font-weight: 600; letter-spacing: 0.5px; font-size: 0.8em;">Total Users</h6>
                        <h2 class="mb-0 fw-bold">{{ $totalUsers ?? 0 }}</h2>
                    </div>
                    <div class="bg-white bg-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="bi bi-people fs-4 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-white border-opacity-25 py-2">
                <a href="{{ route('admin.users.index') }}" class="text-white text-decoration-none d-flex justify-content-between align-items-center">
                    <span class="small fw-semibold">View Details</span>
                    <i class="bi bi-arrow-right-short fs-5"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Total Events Card -->
    <div class="col-md-4">
        <div class="card bg-success text-white h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title text-uppercase mb-1" style="font-weight: 600; letter-spacing: 0.5px; font-size: 0.8em;">Total Events</h6>
                        <h2 class="mb-0 fw-bold">{{ $totalEvents ?? 0 }}</h2>
                    </div>
                    <div class="bg-white bg-opacity-25 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="bi bi-calendar-check fs-4 text-white"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-white border-opacity-25 py-2">
                <a href="{{ route('admin.events.index') }}" class="text-white text-decoration-none d-flex justify-content-between align-items-center">
                    <span class="small fw-semibold">Manage Events</span>
                    <i class="bi bi-arrow-right-short fs-5"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Active Sessions (Placeholder Example) -->
    <div class="col-md-4">
        <div class="card bg-warning text-dark h-100 shadow-sm border-0">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title text-uppercase mb-1" style="font-weight: 600; letter-spacing: 0.5px; font-size: 0.8em;">System Status</h6>
                        <h2 class="mb-0 fw-bold">Online</h2>
                    </div>
                    <div class="bg-dark bg-opacity-10 rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                        <i class="bi bi-activity fs-4 text-dark"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-transparent border-dark border-opacity-10 py-2">
                <span class="text-dark small fw-semibold">All systems running smoothly</span>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4">
                <h5 class="fw-bold mb-0 text-dark">Recent Activities</h5>
            </div>
            <div class="card-body px-4 py-3">
                <div class="text-muted fst-italic py-3">No recent activities recorded. Start managing the platform!</div>
            </div>
        </div>
    </div>
</div>
@endsection
