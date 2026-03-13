@extends('admin.layout')
@section('title', 'Edit Event')

@section('content')
<div class="row w-100 justify-content-center">
    <div class="col-md-9 col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-bottom-0 pt-4 pb-3 px-4 d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="fw-bold mb-1 text-dark"><i class="bi bi-pencil-square text-primary me-2"></i>Update Event: {{ Str::limit($event->title, 20) }}</h5>
                    <small class="text-muted fw-semibold">Event ID #{{ $event->id }}</small>
                </div>
            </div>
            <div class="card-body px-4 py-4 bg-light">
                <div class="bg-white p-4 rounded shadow-sm border border-light">
                    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control border-primary shadow-sm @error('title') is-invalid @enderror" style="border-width: 2px;" id="title" name="title" placeholder="Event Title" value="{{ old('title', $event->title) }}" required>
                            <label for="title" class="fw-semibold text-primary">Event Title *</label>
                            @error('title')
                                <div class="invalid-feedback fw-semibold"><i class="bi bi-exclamation-triangle"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4 position-relative">
                            <label for="description" class="form-label text-muted fw-bold small text-uppercase" style="letter-spacing: 0.5px;">Detailed Description</label>
                            <textarea class="form-control bg-light border-0 shadow-sm rounded-3 p-3 @error('description') is-invalid @enderror" id="description" name="description" rows="6" placeholder="Outline context, terms, or descriptions here...">{{ old('description', $event->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback fw-semibold mt-2"><i class="bi bi-exclamation-triangle"></i> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row align-items-center bg-light rounded shadow-sm p-3 mb-4 mx-0 border border-secondary border-opacity-10">
                            <div class="col-12 d-flex align-items-center justify-content-between">
                                <label for="event_date" class="form-label text-dark fw-bold mb-0"><i class="bi bi-calendar-event text-success me-2 fs-5"></i> Scheduled Event Date</label>
                                <div class="input-group w-50" style="min-width: 200px;">
                                    <input type="date" class="form-control rounded-pill px-4 @error('event_date') is-invalid @enderror" id="event_date" name="event_date" value="{{ old('event_date', $event->event_date ? \Carbon\Carbon::parse($event->event_date)->format('Y-m-d') : '') }}">
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                @error('event_date')
                                    <div class="text-danger small fw-bold"><i class="bi bi-x-circle me-1"></i> {{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-5 pt-4 border-top">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-link text-secondary text-decoration-none fw-semibold px-0"><i class="bi bi-arrow-left me-1"></i> Return without saving</a>
                            <button type="submit" class="btn btn-primary px-5 fw-bold shadow-sm rounded-pill"><i class="bi bi-cloud-arrow-up me-2"></i> Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
