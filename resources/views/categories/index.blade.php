<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
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

    <a href="{{ route('categories.create') }}" class="btn btn-primary p-1 m-3">Create Category</a>
    <table>
        <thead>
            <tr>
                <th>category_id</th>
                <th>category_name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->category_id }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <form action="{{ route('categories.show', $category->category_id) }}">
                            <button type="submit">Show</button>
                        </form>
                        <form action="{{ route('categories.destroy', $category->category_id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <form action="{{ route('categories.edit', $category->category_id) }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
