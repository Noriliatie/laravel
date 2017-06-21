@extends ('layouts.app')

@section ('content')
<div class="col-md-12">
    
  <div class="card">
    <h3 class="card-header">Show Note</h3>
    <div class="card-block">
      <div class="card-text"><h3>{{ $note->title }}</h3></div>
      <div class="row">
        <div class="card-text col-md-6">{{ $note->body }}</div>
        <div class="card-text col-md-6" style="text-align:right"><a href="/notes" class="btn btn-success"><i class="fa fa-btn fa-arrow-left"></i>Back</a></div>
      </div>
      
      <hr>
      <div class="comments">
          <div class="card-text"><h3>List of Comments</h3></div>
          <ul class="list-group">
              @foreach ($note->comments as $comment)
              <li class="list-group-item">
                  <strong>
                      {{ $comment->created_at->diffForHumans() }}:&nbsp;
                  </strong>
                  {{ $comment->body }}
              </li>
              @endforeach
          </ul>
      </div>
      
      <hr>
      <!-- add comments -->
      <div class="card">
          <div class="card-block">
              <form method="post" action="/notes/{{ $note->id }}/comments">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <textarea name="body" placeholder="Place your comment here." class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>

</div><!-- /.blog-main -->
@endsection