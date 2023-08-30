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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




    <a href="{{ route('products.create') }}" class="btn btn-primary p-1 m-3">create product</a>
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
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
           <td>{{ $product->product_id }} </td>
                <td>{{ $product->product_name }} </td>
                <td>{{ $product->category_id }}</td>
                <td>{{ $product->admin_id }}</td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_availability }} </td>
              <td>  @if ($product->product_picture)
                <img src="{{ asset('storage/' . $product->product_picture) }}" alt="{{ $product->product_name }}" style="max-width: 300px;">
            @else
                No Image
            @endif</td>
             <td>{{ $product->updated_at }} </td>
              <td>{{ $product->created_at }} </td>
                <td>
                    <form action="{{ route('products.show', $product->product_id) }}">
                        <button type="submit">show</button>
                    </form>
                    <form action="{{ route('products.destroy', $product->product_id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">delete</button>
                    </form>

                    <form action="{{ route('products.edit', $product->product_id) }}">
                        <button type="submit">update</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>



</body>

</html>
