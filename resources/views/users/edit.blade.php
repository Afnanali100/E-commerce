<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    <link rel="stylesheet" href="{{ asset('style2.css') }}">
</head>

<body>
    <form action="{{ route('users.update', $user->user_id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div>
            <label for="name" class="form-label">User Name</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email" class="form-label">User Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            @error('user_email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password" class="form-label">User Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="user_room" class="form-label">User Room</label>
            <input type="number" class="form-control" name="user_room" value="{{ $user->user_room }}">
            @error('user_room')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

          <div>
            <label for="admin_id" class="form-label">Admin Id</label>
            <input type="number" class="form-control" name="admin_id" value="{{ $user->admin_id }}">
            @error('admin_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div>
            <label for="user_pic" class="form-label">User Picture</label>
            <img src="{{ asset('public/' . $user->user_pic) }}" alt="{{ $user->user_name }}"
                style="max-width: 300px;">
            <input type="file" class="form-control" name="user_pic">
            @error('user_pic')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit">
    </form>
</body>

</html>
