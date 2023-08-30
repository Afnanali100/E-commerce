<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>order_id</th>
                <th>order_date</th>
                <th>order_status</th>
                <th>room_no</th>
                <th>total</th>
                <th>user_id</th>
                <th>admin_id</th>
                <th>notes</th>
                <th>updated_at</th>
                <th>created_at</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->order_status }}</td>
                <td>{{ $order->room_no }}</td>
                <td>{{ $order->total }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->admin_id }}</td>
                <td>{{ $order->notes }}</td>
                <td>{{ $order->updated_at }}</td>
                <td>{{ $order->created_at }}</td>
            </tr>
        </tbody>
    </table>
    <form action="{{ route('orders.index') }}">
        <button type="submit">Return</button>
    </form>
</body>

</html>
