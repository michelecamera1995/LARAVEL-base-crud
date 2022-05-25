

<div>
    @foreach($data as $comic)
    <h1>{{ $comic ->title}}</h1>
    <img src="{{ $comic ->thumb}}" alt="">
    <p>{{ $comic ->description}}</p>
    <p>{{ $comic ->series}}</p>
    <p>{{ $comic ->type}}</p>
    <p>{{ $comic ->sale_date}}</p>
    @endforeach
</div>