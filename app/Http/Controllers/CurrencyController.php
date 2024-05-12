<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    
    public function index()
    {
        $currencies = Currency::all();
        return view('dashboard.currency.index',compact('currencies'));
    }

    
    public function create()
    {
        return view('dashboard.currency.create');

    }

   
    public function store(Request $request)
    {
        Currency::create([
            'name' => $request->name,
        ]);
        return redirect()->route('currency.index')->with('message' , " Currency Add Successfully");
    }


   
    public function edit($id)
    {
        $currency = Currency::find($id);
        return view('dashboard.currency.edit' , compact('currency' ));
    }

    public function update(Request $request,$id)
    {
        $currency = Currency::find($id);
        $currency->name = $request->name;
        $currency->save();
        return redirect()->route('currency.index')->with('message' , "Currency Update Successfully");
    }

   
    public function destroy($id)
    {
        $currency = Currency::find($id)->delete();
        return redirect()->route('currency.index')->with('message' , "Currency Deleted Successfully");
    }
}
