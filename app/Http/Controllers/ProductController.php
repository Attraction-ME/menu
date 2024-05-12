<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Dollar;
use App\Models\Image;
use App\Models\Product;
use App\Models\Shop;
use App\Models\TableWaiter;
use App\Models\Waiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{

    public function cart()
    {
        if(session('table') == null){
            return view('website.error');
        }
        
        if(session('selectWaiter') == null){
            return view('website.error');
        }
        $table = session('table');
        $shop = Shop::find($table->shop_id);
        $selectWaiter = session('selectWaiter');

        return view('website.cart',compact('table','shop','selectWaiter'));
    }

    public function products()
    {
        return view('products');
    }



    public function addToCart($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $shop = Shop::find($product->shop_id);


        $cart = session()->get('cart', []);

        if (count($cart) > 0) {
            $newShopId = $product->shop_id;

            foreach ($cart as $item) {
                $cartShopId = $item['shop_id'];

                if ($newShopId !== $cartShopId) {

                        return response()->json(['error' => 'You cannot mix products from different shops in your cart.']);

                }
            }
        }

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => $request->quantity,
                "price" => $product->finalprice,
                "image" => $product->image_temp,
                "shop_id" => $product->shop_id,
                "shop_name" => $shop->name,
            ];
        }

        session()->put('cart', $cart);
        $cartLength = count($cart);


            return response()->json(['success' => 'Product added to cart successfully!','cart'=>$cart,'cartLength' => $cartLength]);


    }

    public function getSubtotal(Request $request)
{
    $total = 0;

    foreach ((array) session('cart') as $id => $details) {
        $total += $details['price'] * $details['quantity'];
    }

    return response()->json(['subtotal' => $total]);
}


    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {

            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');

        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }

            $cartLength = count($cart);
            return response()->json(['success' => 'Product removed successfully','cart'=>$cart,'cartLength' => $cartLength]);

        }
    }

    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $products = Product::where('shop_id', $shop->id)->get();
        return view('dashboard.products.index', compact('products'));
    }

    public function showLatest()
    {
        $products = Product::orderBy("id", "DESC")->take(10)->get();
        return view('website.main', compact('products'));
    }

    public function show_prod_of_cat()
    {
        $categories = Category::with('products')->get();
        return view('website.main', compact('categories'));
    }

    public function shop($slug)
    {


        if(session('table') == null){
            return view('website.error');

        }
        // Assuming the 'slug' field is used for the shop's slug
        $shop = Shop::where('slug', $slug)->firstOrFail();
        $table = session('table');
        $waiters = $table->waiters;
        return view('website.welcome', compact( 'shop','table','waiters'));


    }
    public function welcome(Request $request , $slug)
    {



        if(session('table') == null){
            return view('website.error');

        }
       
        // Assuming the 'slug' field is used for the shop's slug
        $shop = Shop::where('slug', $slug)->firstOrFail();
        $products = Product::where('shop_id', $shop->id)->get();
        $table = session('table');
        $waiter = Waiter::find($table->waiters[0]->id);
        session()->put('selectWaiter', $waiter);
        $selectWaiter = session('selectWaiter');
   
        return view('website.shop', compact('products', 'shop','table','selectWaiter'));
    }


    public function shops()
    {
        $shops = Shop::all();
        return view('website.shops', compact('shops'));
    }

    public function showByCategory($category)
    {
        $category = Category::where('name', $category)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(24);

        return view('website.categories', compact('products', 'category'));
    }



    public function productByCategory(Request $request)
    {

//dd($request->shop_id);
        if ($request->cat_id === 'all') {
            $shop_id = $request->shop_id;
            $products = Product::where('shop_id', $shop_id)->paginate(20);
            $category = json_decode('{"name": "All Categories"}', true);
        } else {

            $cat_id = $request->cat_id;
            $shop_id = $request->shop_id;
            $category = Category::find($cat_id);
            $products = Product::where('category_id', $cat_id)
                ->where('shop_id', $shop_id)
                ->get();
        }


        // Build an array of product data
        $productData = [];


        foreach ($products as $product) {
            $productData[] = [
                'id' => $product->id, // Include the product ID
                'name' => $product->name,
                'details' => $product->details,
                'category' => $product->category->name,
                'currency' => $product->shopproduct->currency->name,
                'finalprice' => $product->finalprice,
                'sale' => $product->sale,
                'product_link' => route('product.show', $product->id),
                'image_src' => url('/public/products/' . $product->image_temp),
                'image_alt' => $product->name, // Set alt text as the product name, you can customize it
                // Add other product data here...
            ];
        }
        return response()->json(['products' => $productData, 'category' => $category]);
    }



    public function create()
    {

        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $categories = Category::where('shop_id',$shop->id)->get();

        return view('dashboard.products.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $imageName = time() . '.' . $request->image_temp->extension();
        $request->image_temp->move(public_path('products'), $imageName);

       if(isset($request->sale) && $request->sale) {
            $finalprice = $request->price -  ($request->price * ($request->sale / 100));
        } else {
            $finalprice = $request->price;
        }


        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $product = new Product;
        $product->shop_id = $shop->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->finalprice = $finalprice;
        $product->sale = $request->sale;
        $product->details = $request->details;
        $product->image_temp = $imageName;
        $product->category_id = $request->category_id;
        $product->save();

        if ($request->has('image')) {
            foreach ($request->file('image') as $imagefile) {
                $imageNamee = time() . rand(1, 50) . '.' . $imagefile->extension();
                $imagefile->move(public_path('products'), $imageNamee);
                $images = new Image();
                $images->name = $imageNamee;
                $images->product_id = $product->id;
                $images->save();
            }
        }

        return redirect()->route('products.index')->with('message', "Product Added Successfully");
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $categories = Category::where('shop_id',$shop->id)->get();
        $images = Image::where('product_id', $id)->get();


        return view('dashboard.products.edit', compact('categories', 'product', 'images'));
    }

    public function update(Request $request, $id)
    {





        $product = Product::findOrFail($id);

        // Update the main image if provided
        if ($request->has('image_temp')) {
            $imageName = time() . '.' . $request->image_temp->extension();
            $request->image_temp->move(public_path('products'), $imageName);
        }else{
            $imageName = $product->image_temp;
        }

        $finalprice = $request->price -  ($request->price * ($request->sale / 100));
        $product->name = $request->name;
        $product->price = $request->price;
        $product->finalprice = $finalprice;
        $product->sale = $request->sale;
        $product->details = $request->details;
        $product->image_temp = $imageName;
        $product->category_id = $request->category_id;
        $product->save();



        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $delete_image) {
                $id = intval($delete_image);
                $images =  Image::find($id);
                $oldImagesPath = public_path('products/').$images->name ;
                File::delete($oldImagesPath);
                $images->delete();
            }
        }


        if ($request->has('images')) {
            foreach ($request->images as $imagefile) {

                $imageNamee = time() . rand(1, 100) . '.' . $imagefile->extension();
                $imagefile->move(public_path('products'), $imageNamee);

                $images = new Image();
                $images->name = $imageNamee;
                $images->product_id = $product->id;
                $images->save();
            }
        }


        return redirect()->route('products.index')->with('message', "Product updated Successfully");
    }


    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('message', "Product Deleted Successfully");
    }

    public function statics()
    {


        return view('dashboard.homepage');
    }

}
