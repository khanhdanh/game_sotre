<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Book</title>
</head>

<body>
    <h1>Create new Book</h1>
    <form action="{{ url('product/postCreate') }}" method="post">
        {{ csrf_field() }}
        <div>name: <input name="name" /></div>
        <div>gameconsole: <input name="gameconsole" /></div>
        <div>brand: <input name="brand" /></div>
        <div>type: <input name="type" /></div>
        <div>detail: <input name="detail" /></div>
        <div>price: <input name="price" /></div>
        <div><input type="submit" value="Create" /></div>
    </form>
</body>

</html>