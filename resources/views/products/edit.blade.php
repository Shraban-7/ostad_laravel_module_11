@extends('layouts.master')

@section('content')
    <h1>Update Product</h1>

    <form action="{{ route('products.update',$product->id) }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $product->price }}" required>
        <br>
        <button type="submit">Update Product</button>
    </form>
@endsection
