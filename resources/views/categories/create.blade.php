<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div>
            <label for="category_name">Category Name</label>
            <input type="text" name="category_name">
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" class="form-action">
    </form>
</body>

</html>

