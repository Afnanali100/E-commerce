<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
      <link rel="stylesheet" href="{{ asset('style2.css') }}">
</head>

<body>




    <form action="{{ route('products.store') }}" method="post"  enctype="multipart/form-data">
        @csrf

        <div>
            <label for="product_name">Product Name</label>
            <input type="text" name="product_name" id="">
        @error('product_name')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror

        </div>


       <div>
            <label for="admin_id">Admin id</label>
            <input type="number" name="admin_id" id="">
        @error('admin_id')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror

        </div>

        <div>
            <label for="category_id">Category id</label>
            <input type="number" name="category_id" id="">
        @error('category_id')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror

        </div>



        <div>
            <label for="product_price">Product Price</label>
            <input type="text" name="product_price" id="">
         @error('product_price')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>

        <div>
            <label for="product_availability">Product Availability</label>
            <input type="text" name="product_availability" id="">
              @error('product_availability')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>

        <div>
          <label for="product_picture">Product Picture</label>
       <input type="file" name="product_picture" id="">
           @error('product_picture')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>



        <input type="submit" class="form-action">
    </form>
</body>

</html>
