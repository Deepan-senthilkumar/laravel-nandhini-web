@extends('admin.layout')
@section('title', 'Create Event')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-9 col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-dark"><i class="bi bi-calendar-plus text-primary me-2"></i>New Promotional Event</h5>
            </div>
            <div class="card-body px-4 py-4 bg-light">
                <div class="bg-white p-4 rounded shadow-sm">
                    <form action="{{ route('admin.events.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Event Title" value="{{ old('title') }}" required>
                            <label for="title">Event Title *</label>
                            @error('title')
                                <div class="invalid-feedback fw-semibold"><i class="bi bi-exclamation-triangle"></i> {{ $message }}</div>
                            @else
                                <div class="form-text"><i class="bi bi-info-circle text-muted me-1"></i> Use a catchy title summarizing the event.</div>
                            @enderror
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="description" class="form-label text-muted fw-semibold small text-uppercase" style="letter-spacing: 0.5px;">Detailed Description</label>
                            <textarea class="form-control border-light-subtle shadow-sm @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Outline context, terms, or descriptions here...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback fw-semibold mt-2"><i class="bi bi-exclamation-triangle"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row align-items-center">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <label for="event_date" class="form-label text-muted fw-semibold small text-uppercase" style="letter-spacing: 0.5px;"><i class="bi bi-clock text-primary me-1"></i> Scheduled Date</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-calendar3"></i></span>
                                    <input type="date" class="form-control border-start-0 ps-0 @error('event_date') is-invalid @enderror" id="event_date" name="event_date" value="{{ old('event_date') }}">
                                </div>
                                @error('event_date')
                                    <div class="text-danger small fw-semibold mt-2"><i class="bi bi-exclamation-triangle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between mt-5 pt-4 border-top">
                            <a href="{{ route('admin.events.index') }}" class="btn text-secondary fw-semibold px-3 hover-opacity"><i class="bi bi-arrow-left me-1"></i> Discard</a>
                            <button type="submit" class="btn btn-primary px-5 fw-bold shadow-sm rounded-pill"><i class="bi bi-check-lg me-2"></i> Save Event Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-opacity:hover {
        opacity: 0.7;
    }
</style>
@endsection
