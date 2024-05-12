<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Spatie\Image\Image;
use App\Models\Currency;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ShopController extends Controller
{

    public function index()
    {
        $shops = Shop::all();
        return view('dashboard.shops.index',compact('shops'));
    }


    public function create()
    {
//        dd(Auth::user()->id);

           $currencies = Currency::all();
           return view('dashboard.shops.create',compact('currencies'));

    }


    public function store(Request $request)
    {
    //    dd($request);


$validatedData = $request->validate([
    'owner' => 'required|string|max:255',
    'email' => 'required|email|unique:users|max:255',
    'password' => 'required|string|min:6',
    'name' => 'required|string|max:255|unique:shops',
    'phone' => 'required|string|max:20',
    'details' => 'required|string',
    'address' => 'required|string',
    'currency_id' => 'required|exists:currencies,id',
    'latitude' => 'required|numeric',
    'longitude' => 'required|numeric',
    'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
]);



         if($request->logo){
                $imageNamee = time().'.'.$request->logo->extension();
                $request->logo->move(public_path('shops'), $imageNamee);
         }else{
                $imageNamee = 'nophoto.jpg';
         }
         if($request->cover){
                $imageName = time() . rand(1, 100) .'.'.$request->cover->extension();
                $request->cover->move(public_path('shops'), $imageName);

         }else{
                $imageName = 'nophoto.jpg';
         }


        $user = new User();
        $user->name = $request->owner;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 1;
        $user->save();

        $shop = new Shop();
        $shop->user_id = $user->id;
        $shop->name = $request->name;
        $shop->slug = Str::slug($request->name);
        $shop->owner = $request->owner;
        $shop->phone = $request->phone;
        $shop->details = $request->details;
        $shop->address = $request->address;
        $shop->currency_id = $request->currency_id;
        $shop->latitude = $request->latitude;
        $shop->longitude = $request->longitude;
        $shop->cover = $imageName;
        $shop->logo = $imageNamee;
        $shop->save();

        return redirect()->route('shop.index')->with('message' , "Restaurant Added Successfully");


    }


    public function show(Shop $shop)
    {
        //
    }

    public function edit($id)
    {
        $shop = Shop::find($id);
        $owner = User::where('id',$shop->user_id)->first();
        $currencies = Currency::all();
        return view('dashboard.shops.edit', compact('shop', 'owner','currencies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $shop = Shop::find($id);
        $user = User::where('id',$shop->user_id)->first();

        if($request->password == null){
            $password = $user->password;
        }else{
            $password =Hash::make($request->password);
        }

        $user->name = $request->owner;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();


        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('shops'), $imageName);
        }else{
            $imageName = $shop->logo;
        }

        if($request->hasFile('cover')){
            $imageNamee = time(). rand(1, 50) .'.'.$request->image->extension();
            $request->image->move(public_path('shops'), $imageNamee);
        }else{
            $imageNamee = $shop->cover;
        }

        $shop->name = $request->name;
        $shop->slug = Str::slug($request->name);
        $shop->owner = $request->owner;
        $shop->phone = $request->phone;
        $shop->details = $request->details;
        $shop->address = $request->address;
        $shop->currency_id = $request->currency_id;
        $shop->latitude = $request->latitude;
        $shop->longitude = $request->longitude;
        $shop->logo = $imageName;
        $shop->cover = $imageNamee;
        $shop->save();


        return redirect()->route('shop.index')->with('message' , "Profile Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $shop =  Shop::find($id);
        $shop->shopuser()->delete();

        return redirect()->route('shop.index')->with('message', "Shop Deleted Successfully");
    }
}
