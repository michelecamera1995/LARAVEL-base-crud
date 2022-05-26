<div>
    <div>
        <a href="{{ route('comics.create')}}">Create new</a>
    </div>

    @foreach($data as $comic)
    <h1>{{ $comic ->title}}</h1>
    <img src="{{ $comic ->thumb}}" alt="{{ $comic ->title}}">
    <a href="{{ route('comics.show', $comic->id)}}">Show details</a>
    <a href="{{ route('comics.edit', $comic->id)}}">Edit</a>
    @endforeach

</div>