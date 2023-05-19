<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated_fields = $request->validate([
            "productName"=>"required",
            "productImage"=>"required",
            "middlePrice"=>"required",
            "currentPrice"=>"required",
            "category"=>"required",
        ]);
        $productImage = $request->file('productImage');
        
        $filename = $productImage->getClientOriginalName();
        $productImage->move(public_path("images/products/") . $validated_fields["category"]  ,$filename);

        $validated_fields["productImage"] = $filename;
        Product::create($validated_fields);
        return redirect("/admin")->with("message","New Product Added!");
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
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
