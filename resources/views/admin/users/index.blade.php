@extends('admin.layout')
@section('title', 'Users List')

@section('content')
<div class="card shadow-sm border-0 mb-4">
    <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4 d-flex justify-content-between align-items-center">
        <h5 class="fw-bold mb-0 text-dark">Manage Users</h5>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary d-flex align-items-center gap-2">
            <i class="bi bi-person-plus-fill"></i> Add User
        </a>
    </div>
    <div class="card-body px-4 py-3">
        @if ($users->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Registered At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td class="fw-semibold text-muted">{{ $user->id }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 fw-bold" style="width: 40px; height: 40px; font-size: 1.1em;">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </div>
                                    <div class="fw-semibold text-dark">{{ $user->name }}</div>
                                </div>
                            </td>
                            <td><a href="mailto:{{ $user->email }}" class="text-decoration-none text-primary">{{ $user->email }}</a></td>
                            <td class="text-muted"><small>{{ $user->created_at->format('M d, Y h:i A') }}</small></td>
                            <td class="text-end">
                                <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-sm btn-outline-info" title="View"><i class="bi bi-eye"></i></a>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-outline-primary mx-1" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this user? This cannot be undone.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center py-5 text-muted">
                <i class="bi bi-people d-block fs-1 mb-3"></i>
                <p>No users found in the system yet.</p>
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary mt-2">Create First User</a>
            </div>
        @endif
    </div>
</div>
@endsection
