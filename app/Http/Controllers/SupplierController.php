<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        return view('dashboard.suppliers.index', compact('suppliers'));
    }


    public function create()
    {
        return view('dashboard.suppliers.create');
    }


    public function store(Request $request)
    {
        Supplier::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect()->route('suppliers.index')->with('message', "Supplier Added Successfully");

    }


    public function edit($id)
    {
        $suppliers = Supplier::find($id);
        return view('dashboard.suppliers.edit' , compact('suppliers' ));

    }

    public function update(Request $request, $id)
    {

        $suppliers = Supplier::find($id);

        $suppliers->name = $request->name;
        $suppliers->phone = $request->phone;
        $suppliers->email = $request->email;
        $suppliers->address = $request->address;

        $suppliers->save();
        return redirect()->route('suppliers.index')->with('message' , "Supplier Updated Successfully");

    }


    public function destroy($id )
    {
        Supplier::find($id)->delete();
        return redirect()->route('suppliers.index')->with('message' , "Supplier Deleted Successfully");

    }
}
