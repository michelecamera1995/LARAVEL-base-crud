<form action="{{route('comics.store')}" method="POST">
@csrf
<div>
    <label for="title">Title</label>
    <input type="text" name="title">
</div>
<div>
    <label for="description">Description</label>
    <input type="text" name="description">
</div>
<div>
    <label for="series">Series</label>
    <input type="text" name="series">
</div>
<div>
    <label for="type}">Type</label>
    <input type="text" name="type">
</div>
<div>
    <label for="sale_date">Sale_date</label>
    <input type="sale_date">
</div>
    <button type="submit"></button>

</form>