<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>

     <link rel="stylesheet" href="{{asset('style2.css') }}">

</head>

<body>


    <form action="{{ route('products.update', $product->product_id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
            @error('product_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" class="form-control" name="product_price" value="{{ $product->product_price }}">
            @error('product_price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="product_availability" class="form-label">Product Availability</label>
            <input type="text" class="form-control" name="product_availability"
                value="{{ $product->product_availability }}">
            @error('product_availability')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

         <div>
            <label for="admin_id" class="form-label">Admin Id</label>
            <input type="number" class="form-control" name="admin_id"
                value="{{ $product->admin_id}}">
            @error('admin_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>

           <div>
            <label for="category_id" class="form-label">Category Id</label>
            <input type="number" class="form-control" name="category_id"
                value="{{ $product->category_id}}">
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <label for="product_picture" class="form-label">Product Picture</label>
            <img src="{{ asset('storage/' . $product->product_picture) }}" alt="{{ $product->product_name }}"
                style="max-width: 300px;">
            <input type="file" class="form-control" name="product_picture">
            @error('product_picture')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit">
    </form>
</body>

</html>
