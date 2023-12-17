@extends('layouts.master')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" required>
        <br>
        <button type="submit">Add Product</button>
    </form>
@endsection
