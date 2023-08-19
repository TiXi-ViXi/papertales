<a href = "{{route('dashboard')}}"><img src = "../../image/back.png" class="img-fluid img-thumbnail float-right" style="max-width: 100px;"></a>
@foreach($results as $key=>$row)
    <div class="col-md-3">
    <h1>{{ $row->Book_Name }}<h1>
    <h1>{{ $row->Author_Name }}<h1>
    <img src = "../../image/{{ $row->file_path }}" class="gridimage">
    <h1>{{ $row->Price }}<h1>
</div>
<form action="{{route('store.comment' ,$row->id)}}" method= "post">
@csrf
<input type="text" name ="name" class="form-control"  id="exampleInputEmail1" placeholder="Name">
<input type="text" name ="comment" class="form-control"  id="exampleInputEmail1" placeholder="Comment">

<button type="submit" class="btn btn-primary pulse-button">Submit</button>
</form>

<a href="{{route('comment.view',$row->id)}}" class = "btn btn-sm btn-danger">Comment</a>
@endforeach()