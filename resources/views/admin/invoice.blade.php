<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        
        <h3>Customer name: {{$data->name}}</h3>
        <h3>Customer address: {{$data->rec_address}}</h3>
        <h3>Phone: {{$data->phone}}</h3>
        <h3>Product title: {{$data->product->title}}</h3>
        <h3>Price: {{$data->product->price}}</h3>

        <img src="products/{{$data->product->image}}" height="250" alt="">
    </center>
</body>
</html>