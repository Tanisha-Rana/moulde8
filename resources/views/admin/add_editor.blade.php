@extends('admin.layout.structure')

@section('content')
	  
      <main class="col-md-10 ms-sm-auto px-4">

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h1 class="h3 mt-3">Add Editor</h1>
              <div class="card">
                <div class="card-body">

				  <form action="{{ url('add_editor') }}" method="post" class="mt-3">
            @csrf
                     
                        <div class="mb-3">
                        <label class="form-label">Editor Name</label>
                        <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Email</label>
                        <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Phone</label>
                        <input type="text" name="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                        <label class="form-label">Editor Password</label>
                        <input type="password" name="password" class="form-control" required>
                        </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
