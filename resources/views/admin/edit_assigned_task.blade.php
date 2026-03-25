@extends('admin.layout.structure')

@section('content')
	  
      <main class="col-md-10 ms-sm-auto px-4">

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h1 class="h3 mt-3">Edit Assigned Task</h1>
              <div class="card">
                <div class="card-body">

				  <form action="{{ url('edit_assigned_task/' . $task->id) }}" method="post" class="mt-3">
            @csrf
                     
                        <div class="mb-3">
                        <label class="form-label">Editor</label>
                            <select name="editor_id" class="form-control" required>
                                <option value="">Select Editor</option>
                                @foreach($editor_arr as $editor)
                                    <option value="{{ $editor->id }}" @selected($task->editor_id == $editor->id)>{{ $editor->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Booking / Client</label>
                            <select name="booking_id" class="form-control" required>
                                <option value="">Select Booking</option>
                                @foreach($booking_arr as $booking)
                                    <option value="{{ $booking->id }}" @selected($task->booking_id == $booking->id)>Booking #{{ $booking->id }} - {{ $booking->client->name ?? 'Unknown Client' }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Task Description</label>
                        <textarea name="task_description" class="form-control" rows="3">{{ $task->task_description }}</textarea>
                        </div>

                         <div class="mb-3">
                        <label class="form-label">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="pending" @selected($task->status == 'pending')>Pending</option>
                                <option value="in_progress" @selected($task->status == 'in_progress')>In Progress</option>
                                <option value="completed" @selected($task->status == 'completed')>Completed</option>
                            </select>
                        </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Update Task</button>
                  </form>

				</div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection
