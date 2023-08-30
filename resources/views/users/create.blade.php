<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
 <link rel="stylesheet" href="{{ asset('style2.css') }}">
</head>

<body>
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">User Name</label>
            <input type="text" name="name">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">User Email</label>
            <input type="email" name="email">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">User Password</label>
            <input type="password" name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="user_room">User Room</label>
            <input type="number" name="user_room">
            @error('user_room')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

              <div>
            <label for="user_room">Admin Id</label>
            <input type="number" name="admin_id">
            @error('admin_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

          <div>
          <label for="user_pic">User Picture</label>
       <input type="file" name="user_pic" id="">
           @error('user_pic')
       <div class="alert alert-danger">{{ $message }}</div>
      @enderror
        </div>





        <input type="submit" class="form-action">
    </form>
</body>

</html>
