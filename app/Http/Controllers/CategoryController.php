<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $categories = Category::where('shop_id',$shop->id)->get();

        return view('dashboard.Categories.index',compact('categories'));
    }


    public function create()
    {

        return view('dashboard.Categories.create');
    }


    public function store(Request $request)
    {
        if($request->hasFile('image')){
             $imageName = time().'.'.$request->image->extension();
             $request->image->move(public_path('categories'), $imageName);
        }else{
             $imageName=null;
            }
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
            'shop_id' => $shop->id,
        ]);
        return redirect()->route('categories.index')->with('message' , "Category Added Successfully");

    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.Categories.edit' , compact('category' ));

    }

    public function update(Request $request, $id)
    {

        $category = Category::find($id);


        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('categories'), $imageName);
        }else{
            $imageName = $category->image;
        }

        $category->name = $request->name;
        $category->image = $imageName;

        $category->save();
        return redirect()->route('categories.index')->with('message' , "Category Updated Successfully");

    }

   
    public function destroy($id )
    {
        $categories = Category::find($id)->delete();
        return redirect()->route('categories.index')->with('message' , "Category Deleted Successfully");

    }
}
