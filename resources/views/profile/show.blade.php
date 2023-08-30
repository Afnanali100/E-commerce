@extends('layouts.app')

@section('content')
    <h1>Your Profile</h1>
          @if ($user)
                <td>Name:{{ $user->name}}</td>
                <br>
                <td>Email:{{ $user->email }}</td>
                <br>
                <td> Password:{{ $user->password }}</td>
                <br>
                <td>Room:{{ $user->user_room }}</td>
                <br>
                <td>Image:
                    @if ($user->user_pic)
                        <img src="{{ asset('storage/' . $user->user_pic) }}" alt="{{ $user->user_name }}"
                            style="max-width: 300px;">
                    @else
                        No Image
                    @endif
                </td>
            @else
            <p>No user data available.</p>
        @endif
   <h2>Your Products</h2>
     @if(!$user->orders->isEmpty())
   @foreach ($user->orders as $order)
        <h3>Order ID: {{ $order->id }}</h3>
        @foreach ($order->orderedProducts as $orderedProduct)
            <p>
                Product Name: {{ $orderedProduct->product->product_name }} |
                <br>

                Price: {{ $orderedProduct->product->product_price }}
                       <br>
            </p>
            <br>
        @endforeach
    @endforeach
    @else
    NO Prducts
    @endif
<br>

    <a href="{{ route('profile.edit') }}">Edit Profile</a>

  <a href="{{ route('profile.searchinput') }}" class="btn btn-primary p-1 m-3">Search For Product</a>

    @endsection
