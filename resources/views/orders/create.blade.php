<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Order</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <div>
            <label for="order_status">Order Status</label>
            <input type="text" name="order_status">
            @error('order_status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="order_date">Order Date</label>
            <input type="datetime-local" name="order_date">
            @error('order_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="total">Total</label>
            <input type="number" name="total">
            @error('total')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="room_no">Room No</label>
            <input type="number" name="room_no">
            @error('room_no')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea name="notes"></textarea>
            @error('notes')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="user_id">User ID</label>
            <input type="number" name="user_id">
            @error('user_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="admin_id">Admin ID</label>
            <input type="number" name="admin_id">
            @error('admin_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <input type="submit" class="form-action">
    </form>
</body>

</html>
