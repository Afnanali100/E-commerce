
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Search Results for "{{ $query }}"</h1>
    @if ($products->isEmpty())
        <p>No products found.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>Name: {{ $product->product_name }}</li>
                <li>Price: {{ $product->product_price }}</li>
                <li>Avaliablity {{ $product->product_availability }}</li>
                <li>
                    @if ($product->product_picture)
                        <img src="{{ asset('storage/' . $product->product_picture) }}" alt="{{ $product->product_name }}"
                            style="max-width: 300px;">
                    @else
                        No Image
                    @endif
                </li>
            @endforeach

        </ul>
    @endif

           <a href="{{ route('profile.searchinput') }}" class="btn btn-primary p-1 m-3">Return</a>

</body>
</html>
