@extends('admin.layout.structure')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3">Manage Editors</h1>
    <a href="{{ url('add_editor') }}" class="btn btn-primary">Add Editor</a>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-center">
                <thead class="bg-light">
                    <tr>
                        <th class="ps-4">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($editor_arr) > 0)
                        @foreach($editor_arr as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
						    <td class="fw-bold">{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>
                                <a href="{{ url('edit_editor/' . $value->id) }}" class="btn btn-sm btn-outline-primary rounded-pill px-3 me-2">
                                    <i class="fa fa-edit me-1"></i> Edit
                                </a>
                                <a href="{{ url('delete_editor/' . $value->id) }}" 
                                   onclick="return confirm('Are you sure?')" 
                                   class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                    <i class="fa fa-trash me-1"></i> Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="py-5 text-muted">No editors discovered.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
