@extends('admin.layout.structure')

@section('content')
	  
      <main class="col-md-10 ms-sm-auto px-4">

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h1 class="h3 mt-3">Assign Task to Editor</h1>
              <div class="card">
                <div class="card-body">

				  <form action="{{ url('add_assigned_task') }}" method="post" class="mt-3">
            @csrf
                     
                        <div class="mb-3">
                        <label class="form-label">Editor</label>
                            <select name="editor_id" class="form-control" required>
                                <option value="">Select Editor</option>
                                @foreach($editor_arr as $editor)
                                    <option value="{{ $editor->id }}">{{ $editor->name }} ({{ $editor->email }})</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Booking / Client</label>
                            <select name="booking_id" class="form-control" required>
                                <option value="">Select Booking</option>
                                @foreach($booking_arr as $booking)
                                    <option value="{{ $booking->id }}">Booking #{{ $booking->id }} - {{ $booking->client->name ?? 'Unknown Client' }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Task Description</label>
                        <textarea name="task_description" class="form-control" rows="3"></textarea>
                        </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Assign Task</button>
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
