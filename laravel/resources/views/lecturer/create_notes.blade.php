@extends ('layouts.app')

@section ('content')
<div class="col-md-12">
    
  <div class="card">
    <h3 class="card-header">Create Notes</h3>
    <div class="card-block">
      <form method="post" action="/create">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @include ('layouts.errors')
      </form>
    </div>
  </div>

</div><!-- /.blog-main -->
@endsection