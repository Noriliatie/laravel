@extends ('layouts.app')

@section ('content')
  <div class="col-md-12">
    
    <div class="card">
      <h3 class="card-header">List of Notes</h3>
      <div class="card-block">
        <p class="card-text pull-right"><a href="/notes/create" class="btn btn-outline-primary">Create Note</a></p>
          
        <table class="table table-bordered table-hover">
          <thead class="thead-default">
            <tr>
              <th>Note Title</th>
              <th>Created At</th>
              <th>Created By</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($notes as $note)

              @include ('lecturer.notes')

            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div><!-- /.blog-main -->
@endsection