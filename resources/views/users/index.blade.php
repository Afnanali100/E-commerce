<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
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

    <a href="{{ route('users.create') }}" class="btn btn-primary p-1 m-3">Create User</a>
    <table>
        <thead>
            <tr>
                <th>user_id</th>
                <th>user_name</th>
                <th>user_email</th>
                <th>user_password</th>
                <th>user_room</th>
                  <th>admin_id</th>
                <th>user_pic</th>
                <th>updated_at</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->user_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->user_room }}</td>
                    <td>{{ $user->admin_id}}</td>
                    <td>
                        @if ($user->user_pic)
                            <img src="{{ asset('storage/' . $user->user_pic) }}" alt="{{ $user->user_name }}"
                                style="max-width: 300px;">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $user->updated_at }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <form action="{{ route('users.show', $user->user_id) }}">
                            <button type="submit">Show</button>
                        </form>
                        <form action="{{ route('users.destroy', $user->user_id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <form action="{{ route('users.edit', $user->user_id) }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
