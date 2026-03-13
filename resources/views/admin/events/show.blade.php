@extends('admin.layout')
@section('title', 'View Event')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-9 col-lg-8">
        <div class="card shadow-lg border-0 rounded-4 overflow-hidden mb-5">
            <div class="card-header bg-dark text-white pt-5 pb-4 px-5 position-relative">
                <div class="position-absolute top-0 end-0 p-3">
                    <span class="badge bg-light text-dark fw-bold rounded-pill shadow-sm px-3 py-2">ID: #{{ $event->id }}</span>
                </div>
                <h3 class="fw-bold mb-2">{{ $event->title }}</h3>
                <div class="d-flex align-items-center mt-3">
                    @if($event->event_date)
                        <span class="badge bg-success bg-opacity-75 fs-6 fw-semibold px-3 py-2 border border-success border-opacity-50"><i class="bi bi-calendar-check me-2"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('l, F j, Y') }}</span>
                    @else
                        <span class="badge bg-secondary fs-6 fw-semibold px-3 py-2"><i class="bi bi-calendar-x me-2"></i> No Date Provided</span>
                    @endif
                </div>
            </div>
            
            <div class="card-body px-5 py-5 bg-white">
                <div class="mb-5 border-start border-4 border-primary ps-4">
                    <h6 class="text-uppercase text-muted fw-bold mb-3" style="letter-spacing: 1px;">Event Details</h6>
                    @if($event->description)
                        <p class="fs-5 lh-base text-dark">{{ $event->description }}</p>
                    @else
                        <p class="fs-5 text-muted fst-italic">No detailed description has been provided for this event.</p>
                    @endif
                </div>

                <div class="row g-4 pt-4 border-top">
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded shadow-sm border border-light d-flex align-items-center">
                            <i class="bi bi-clock-history fs-3 text-secondary me-3"></i>
                            <div>
                                <small class="text-uppercase text-muted fw-bold d-block" style="letter-spacing: 0.5px;">Initially Created</small>
                                <span class="fw-semibold text-dark">{{ $event->created_at->format('M d, Y h:i A') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3 bg-light rounded shadow-sm border border-light d-flex align-items-center">
                            <i class="bi bi-pencil fs-3 text-primary me-3"></i>
                            <div>
                                <small class="text-uppercase text-muted fw-bold d-block" style="letter-spacing: 0.5px;">Last Modification</small>
                                <span class="fw-semibold text-dark">{{ $event->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-5 pt-4">
                    <a href="{{ route('admin.events.index') }}" class="btn btn-outline-dark fw-semibold px-4 rounded-pill"><i class="bi bi-arrow-left me-2"></i> Back to Events</a>
                    <div>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-primary fw-bold shadow-sm px-4 rounded-pill"><i class="bi bi-pencil-square me-2"></i> Edit This Event</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
