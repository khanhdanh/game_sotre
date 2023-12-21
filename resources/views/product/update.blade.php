<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Book</title>
</head>

<body>
    <h1>Update Book</h1>
    <form action="{{ url("product/postUpdate/{$b->name}") }}" method="post">
        {{ csrf_field() }}
        <div>name: <input name="name" value="{{$b->name}}" /></div>
        <div>gameconsole: <input name="gameconsole" value="{{$b->gameconsole}}" /></div>
        <div>brand: <input name="brand" value="{{$b->brand}}" /></div>
        <div>type: <input name="type" value="{{$b->type}}" /></div>
        <div>type: <input name="type" value="{{$b->type}}" /></div>
        <div>price: <input name="price" value="{{$b->price}}" /></div>
        <div><input type="submit" value="Update" /></div>
    </form>
</body>

</html>

