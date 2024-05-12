<?php

namespace App\Http\Controllers;


use App\Models\PurchaseDetails;
use App\Models\PurchaseInvoice;

use App\Models\Supplier;
use Illuminate\Http\Request;


class PurchaseInvoiceController extends Controller
{

    public function index()
    {
        $purchase_invoices = PurchaseInvoice::all();
        $purchase_details = PurchaseInvoice::all();
        $suppliers = Supplier::all();

        return view('dashboard.purchase_invoices.index', compact('purchase_invoices', 'purchase_details', 'suppliers'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        return view('dashboard.purchase_invoices.create', compact('suppliers'));
    }

    public function store(Request $request)
    {
        // dd($request);

        $PurchaseInvoice = new PurchaseInvoice();
        $PurchaseInvoice->discount = $request->discount;
        $PurchaseInvoice->tax = $request->tax;
        $PurchaseInvoice->total = 0;
        $PurchaseInvoice->note = $request->note;

        // Assuming the value of the selected option in the <select> tag is the supplier's ID
        $PurchaseInvoice->supplier_id = $request->supplier_id;

        $PurchaseInvoice->save();

        foreach ($request->input('item') as $key => $class) {

            $ammount = $request->ammount[$key];
            $price = $request->price[$key];
            $subtotal = $ammount * $price;


            $PurchaseDetails = new PurchaseDetails();
            $PurchaseDetails->purchase_invoice_id = $PurchaseInvoice->id;
            $PurchaseDetails->item = $class;
            $PurchaseDetails->ammount = $ammount;
            $PurchaseDetails->price = $price;
            $PurchaseDetails->subtotal = $subtotal;
            $PurchaseDetails->save();

            $final_invoices = PurchaseInvoice::find($PurchaseInvoice->id);

            $final_invoices->total = $PurchaseDetails->subtotal + $final_invoices->total;
            $final_invoices->save();


        }


        return redirect()->route('purchase_invoices.index')->with('message', " Invoice Added Successfully");
    }

    public function show($id)
    {

        $purchase_invoices = PurchaseInvoice::find($id);

        return view('dashboard.purchase_invoices.show', compact('purchase_invoices'));
    }


    public function edit($id)
    {
        $purchase_invoices = PurchaseInvoice::find($id);
        return view('dashboard.purchase_invoices.edit', compact('purchase_invoices'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        PurchaseInvoice::find($id)->delete();
        return redirect()->route('purchase_invoices.index')->with('message', "Invoice Deleted Successfully");

    }

}
