@extends('layouts.app')

@section('content')
    <form action="{{ route('profile.search') }}" method="GET">
        <input type="text" name="query" placeholder="Search for products...">
        <button type="submit">Search</button>
    </form>
@endsection
