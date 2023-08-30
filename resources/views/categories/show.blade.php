<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>category_id</th>
                <th>category_name</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $category->category_id }}</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('categories.index') }}">
        <button type="submit">Return</button>
    </form>
</body>

</html>
