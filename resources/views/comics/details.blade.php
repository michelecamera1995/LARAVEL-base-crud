<div>
    @foreach($data as $comic)
    <p>{{ $comic ->description}}</p>
    <p>{{ $comic ->series}}</p>
    <p>{{ $comic ->type}}</p>
    <p>{{ $comic ->sale_date}}</p>
    @endforeachs
</div>