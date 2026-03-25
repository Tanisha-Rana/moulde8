@extends('admin.layout.structure')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Assigned Tasks Management</h1>
    <a href="{{ url('add_assigned_task') }}" class="btn btn-primary">Assign New Task</a>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-center">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Editor Name</th>
                        <th>Booking / Client</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($task_arr) > 0)
                        @foreach($task_arr as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
						    <td class="fw-bold">{{ $value->editor->name ?? 'N/A' }}</td>
                            <td>
                                Booking #{{ $value->booking_id }} <br>
                                <small class="text-muted">{{ $value->booking->client->name ?? 'N/A' }}</small>
                            </td>
                            <td>{{ Str::limit($value->task_description, 50) }}</td>
                            <td>
                                <span class="badge bg-{{ $value->status == 'completed' ? 'success' : ($value->status == 'in_progress' ? 'primary' : 'warning') }} rounded-pill">
                                    {{ ucfirst(str_replace('_', ' ', $value->status)) }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ url('edit_assigned_task/' . $value->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 me-2">
                                    <i class="fa fa-edit me-1"></i> Edit
                                </a>
                                <a href="{{ url('delete_assigned_task/' . $value->id) }}" 
                                   onclick="return confirm('Are you sure?')" 
                                   class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                    <i class="fa fa-trash me-1"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="py-5 text-muted">No assigned tasks found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
