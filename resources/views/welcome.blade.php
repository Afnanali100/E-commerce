<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            text-align: center;
            font-size: 50px;
            text-decoration: none;

        }
    </style>
</head>
<body>
<h1 style="text-align: center">Welcome Admin</h1>
  <p><a  href="{{ route('products.index') }}" class="btn btn-primary p-1 m-3"> products</a></p>
<p><a href="{{ route('orders.index') }}" class="btn btn-primary p-1 m-3"> orders</a></p>
<p><a href="{{ route('users.index') }}" class="btn btn-primary p-1 m-3"> Users</a></p>
<p><a href="{{ route('categories.index') }}" class="btn btn-primary p-1 m-3"> Cateories</a></p>
</body>
</html>
