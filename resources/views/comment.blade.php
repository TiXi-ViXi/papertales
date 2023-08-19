<h1>Reviews</h1>
    
@foreach($result as $key=>$row)
        <div >
            <h3>User: {{ $row->user }}</h3>
            <p>Comment: {{ $row->comment }}</p>
        </div>
    @endforeach