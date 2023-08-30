<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
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
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->user_room }}</td>
                <td>{{ $user->admin_id }}</td>
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
            </tr>
        </tbody>
    </table>
    <form action="{{ route('users.index') }}">
        <button type="submit">Return</button>
    </form>
</body>

</html>
