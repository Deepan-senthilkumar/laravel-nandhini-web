@extends('admin.layout')
@section('title', 'Events List')

@section('content')
<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0 text-dark">Manage Events</h5>
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
            <i class="bi bi-plus-circle"></i> Add New Event
        </a>
    </div>
    <div class="card-body px-4 py-3">
        @if ($events->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th width="5%">#ID</th>
                            <th width="30%">Event Title</th>
                            <th width="35%">Description Snippet</th>
                            <th width="15%">Scheduled Date</th>
                            <th width="15%" class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                        <tr>
                            <td class="fw-semibold text-muted">{{ $event->id }}</td>
                            <td>
                                <div class="fw-bold text-dark">{{ $event->title }}</div>
                            </td>
                            <td>
                                <span class="text-muted d-inline-block text-truncate" style="max-width: 250px;" title="{{ $event->description }}">
                                    {{ $event->description ?: 'No description provided' }}
                                </span>
                            </td>
                            <td>
                                @if($event->event_date)
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1"><i class="bi bi-calendar-event me-1"></i> {{ \Carbon\Carbon::parse($event->event_date)->format('M d, Y') }}</span>
                                @else
                                    <span class="badge bg-secondary-subtle text-secondary px-2 py-1">Not Set</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-sm btn-outline-info" title="View Details"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-sm btn-outline-primary mx-1" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this event? This action cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete Event"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $events->links() }}
            </div>
        @else
            <div class="text-center py-5 text-muted bg-light rounded my-3 border border-dashed">
                <i class="bi bi-calendar-x d-block display-4 mb-3 text-secondary"></i>
                <h5 class="fw-semibold mt-3">No events to display</h5>
                <p class="mb-4 text-muted">Get started by creating your first upcoming promotional event or sale.</p>
                <a href="{{ route('admin.events.create') }}" class="btn btn-primary px-4 py-2 fw-semibold shadow-sm"><i class="bi bi-plus-circle me-2"></i>Create First Event</a>
            </div>
        @endif
    </div>
</div>
@endsection
