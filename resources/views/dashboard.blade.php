@extends('layouts.master')

@section('content')
    <h1>Dashboard</h1>
    <h2>Sales Figures</h2>
    <div class="d-flex justify-between">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Sale Today</h5>

                <p class="card-text">${{ $salesToday }}</p>

            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Yesterday</h5>

                <p class="card-text">${{ $salesYesterday }}</p>

            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">This Month</h5>

                <p class="card-text">${{ $salesThisMonth }}</p>

            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Last Month:</h5>

                <p class="card-text">${{ $salesLastMonth }}</p>

            </div>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Product List</a>
    <a href="{{ route('transaction') }}" class="btn btn-primary">Transaction List</a>
@endsection
