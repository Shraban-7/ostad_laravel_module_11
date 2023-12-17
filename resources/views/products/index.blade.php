@extends('layouts.master')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-success">Add new product</a>
    <a href="{{ route('dashboard') }}" class="btn btn-success">go back dashboard</a>
    <table   class="table">
        <thead>
            <tr>
                <th>product name</th>
                <th>quantity</th>
                <th>price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.sale',$product->id) }}">Sale</a>
                        <a href="{{ route('products.edit',$product->id) }}">Edit</a>
                        <a href="{{ route('products.delete',$product->id) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
