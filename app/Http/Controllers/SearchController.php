<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $search = $request->input('keyword');
    $shop_id = $request->input('shop_id');

    if ($request->keyword != '') {
        $products = Product::where(function ($query) use ($search ,$shop_id) {
            $query->where('shop_id', intval($shop_id))
            ->where('name', 'like', '%' . $search . '%');
        })->paginate(24);
        $products->appends(['keyword' => $search , 'shop_id' =>$shop_id]);

    } else {
        $products = Product::paginate(24);
    }
    return View('website.searchResult')->with(['data' => $products , 'shop_id' => $shop_id]);
}

    public function website_search(Request $request)
    {
        $products = Product::paginate(24);
        if ($request->keyword != '') {
            $products = Product::where('name', 'LIKE', '%' . $request->keyword . '%')
                ->where('shop_id',intval($request->shop_id))
                ->with('images','shopproduct','category')
                ->get();
        }
        return response()->json([
            'products' => $products
        ]);
    }
}
