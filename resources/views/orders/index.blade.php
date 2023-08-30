<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order List</title>
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

    <a href="{{ route('orders.create') }}" class="btn btn-primary p-1 m-3">Create Order</a>
    <table>
        <thead>
            <tr>
                <th>order_id</th>
                <th>order_status</th>
                <th>order_date</th>
                <th>total</th>
                <th>room_no</th>
                <th>notes</th>
                <th>user_id</th>
                <th>admin_id</th>
                <th>updated_at</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->room_no }}</td>
                    <td>{{ $order->notes }}</td>
                    <td>{{ $order->user_id  }}</td>
                    <td>{{ $order->admin_id }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <form action="{{ route('orders.show', $order->order_id) }}">
                            <button type="submit">Show</button>
                        </form>
                        <form action="{{ route('orders.destroy', $order->order_id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                        <form action="{{ route('orders.edit', $order->order_id) }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
