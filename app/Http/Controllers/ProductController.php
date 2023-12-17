<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function dashboard()
    {


        return view('dashboard', [
            'salesToday' => 100,
            'salesYesterday' => 150,
            'salesThisMonth' => 2000,
            'salesLastMonth' => 1800,
        ]);
    }


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function transaction()
    {
        $products = DB::table('products')
        -> orderBy('created_at', 'desc')
        -> get();
        return view('transaction', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function sale(Product $product)
    {
        return view('products.sale',compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product update successfully');
    }
}
