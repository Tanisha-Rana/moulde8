@extends('admin.layout.structure')

@section('content')
	  
      <main class="col-md-10 ms-sm-auto px-4">

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h1 class="h3 mt-3">Edit Editor</h1>
              <div class="card">
                <div class="card-body">

				  <form action="{{ url('edit_editor/' . $fetch->id) }}" method="post" class="mt-3">
            @csrf
                     
                        <div class="mb-3">
                        <label class="form-label">Editor Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $fetch->name }}" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $fetch->email }}" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ $fetch->phone }}" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Password (Leave blank to keep current)</label>
                        <input type="password" name="password" class="form-control">
                        </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
