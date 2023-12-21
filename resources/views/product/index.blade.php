<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>game product</h1>
    <h3><a href="{{url('product/create')}}">Create New</a></h3>
    <table border="1">
        <thead>
            <tr>
                <th>name</th>
                <th>gameconsole</th>
                <th>brand</th>
                <th>type</th>
                <th>detail</th>
                <th>price</th>

            </tr>
        </thead>
        <tbody>
            @foreach($books as $b)
            <tr>
                <td>{{$b->name}}</td>
                <td>{{$b->gameconsole}}</td>
                <td>{{$b->brand}}</td>
                <td>{{$b->type}}</td>
                <td>{{$b->detail}}</td>
                <td>{{$b->price}}</td>

                Bài thực hành Laravel số 2

              
                <td>
                    <a href="{{url("product/update/{$b->name}")}}">Update</a> |
                    <a href="{{url("product/delete/{$b->name}")}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>