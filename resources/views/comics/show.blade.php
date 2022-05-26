<div>
    <h2>DETAILS:</h2>
    <p>{{ $data->description}}</p>
    <p>{{ $data ->series}}</p>
    <p>{{ $data->type}}</p>
    <p>{{ $data ->sale_date}}</p>
</div>

<form action="{{route('comics.destroy', $data->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" value="">delete</button>

</form>