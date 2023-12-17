@extends('layouts.master')

@section('content')
    <h1>Latest transsections</h1>
    <a href="{{ route('dashboard') }}" class="btn btn-success">goto dashboard</a>
    <table   class="table">
        <thead>
            <tr>
                <th>product name</th>
                <th>quantity</th>
                <th>price</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        {{ $product->created_at }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
