<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Shop;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class TableController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $tables= Table::where('shop_id',$shop->id)->get();

        return view('dashboard.tables.index',compact('tables'));
    }


    public function create()
    {

        return view('dashboard.tables.create');
    }




    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $table = new Table();
        $table->name = $request->name;
        $table->shop_id = $shop->id;
        $table->save();

        $link = env('APP_URL') . '/tables/show/' . $table->id;
        $qrCode = QrCode::size(300)->generate($link);

        $imageName = time() . '_' . $table->id . '.svg';
        file_put_contents(public_path('qr/' . $imageName), $qrCode);
        $table->qrcode=$imageName;
        $table->link = $link;
        $table->save();
        return redirect()->route('tables.index')->with('message' , "Table Added Successfully");
    }

    public function show($id)
    {
        session()->forget('cart');
        session()->forget('table');
        session()->forget('selectWaiter');

        $table = Table::find($id);

        if($table == null){
            return view('website.error');
        }

        $shop = Shop::where('id', $table->shop_id)->firstOrFail();
        $products = Product::where('shop_id', $shop->id)->paginate(20);
        $customUrl = env('APP_URL') . '/menu/' . $shop->slug;
        session(['table' => $table]);
        return redirect($customUrl)->with(compact( 'shop', 'products'));
    }

    public function generateQrCode($id)
    {
        $table = Table::find($id);
        return view('dashboard.tables.show',compact('table'));
    }



    public function edit($id)
    {
        $table = Table::find($id);
        return view('dashboard.tables.edit' , compact('table' ));

    }

    public function update(Request $request, $id)
    {

        $table = Table::find($id);
        $table->name = $request->name;
        $table->save();
        return redirect()->route('tables.index')->with('message' , "Table Updated Successfully");

    }

    public function destroy($id )
    {
        $tables = Table::find($id)->delete();
        return redirect()->route('tables.index')->with('message' , "Table Deleted Successfully");

    }
}
