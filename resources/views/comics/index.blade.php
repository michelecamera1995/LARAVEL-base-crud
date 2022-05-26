<div>
    @foreach($data as $comic)
    <h1>{{ $comic ->title}}</h1>
    <img src="{{ $comic ->thumb}}" alt="{{ $comic ->title}}">
    <a href="{{ route('comics.show', $comic -> id)}}">Show details</a>
    @endforeach
    <a href="{{ route('comics.create')}}">Create new</a>
</div>