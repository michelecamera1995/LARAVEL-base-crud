<div>
    @foreach($data as $comic)
    <h1>{{ $comic ->title}}</h1>
    <img src="{{ $comic ->thumb}}" alt="{{ $comic ->title}}">
    <a href="{{ route('comics.show', $comic -> id)}}">link</a>
    @endforeach
</div>