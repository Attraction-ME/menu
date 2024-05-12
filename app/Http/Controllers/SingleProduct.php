<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Image;
use App\Models\Label;
use App\Models\Product;
use App\Models\SetAttribute;
use App\Models\Shop;
use App\Models\Stock;
use App\Models\SubAttribute;
use Illuminate\Http\Request;

class SingleProduct extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
        $table = session('table');
        $shop = Shop::find($product->shop_id);
        return view('website.product', compact('product','shop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
