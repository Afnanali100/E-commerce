<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>product_id</th>
                <th>product_name</th>
                 <th>category_id</th>
                  <th>Admin_id</th>
                <th>product_price</th>
                <th>product_availability</th>
                <th>product_picture</th>
                 <th>updated_at</th>
                  <th>created_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->product_id }} </td>
                <td>{{ $product->product_name }} </td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->admin_id }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_availability }} </td>
               <td> @if ($product->product_picture)
                <img src="{{ asset('storage/' . $product->product_picture) }}" alt="{{ $product->product_name }}" style="max-width: 300px;">
            @else
                No Image
            @endif</td>
             <td>{{ $product->updated_at }} </td>
              <td>{{ $product->created_at }} </td>
            </tr>

        </tbody>
    </table>
  <form action="{{ route('products.index') }}">
        <button type="submit">return</button>
    </form>
</body>

</html>
