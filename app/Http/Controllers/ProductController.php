<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return $products;
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = new Product();
        $product->id= $request->id;
        $product->Nombre= $request->Nombre;
        $product->Precio= $request->Precio;
        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = Product::find($id);
        return $product;
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        $product->Nombre= $request->Nombre;
        $product->Precio= $request->Precio;
        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $products = Product::find($id);
        $products->delete();
        return 'Elemento eliminado';
    }
}
