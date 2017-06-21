<tr>
  <td width="20%"><a href="/notes/{{ $note->id }}">{{ $note->title }}</a></td>
  <td width="20%">{{ $note->created_at->toFormattedDateString() }}</td>
  <td width="20%">Mark</td>
  <td width="10%" style="text-align:center">
    <div class="btn-group">
      <a class="btn btn-outline-info" href="/notes/{{ $note->id }}"><i class="fa fa-search"></i></a>
      <a class="btn btn-outline-warning" href="/notes/{{ $note->id }}"><i class="fa fa-edit"></i></a>
      <a class="btn btn-outline-danger" href="/notes/{{ $note->id }}"><i class="fa fa-trash-o"></i></a>
    </div>
  </td>
</tr>