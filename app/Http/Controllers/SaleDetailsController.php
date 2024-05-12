<?php

namespace App\Http\Controllers;

use App\Models\SaleDetails;
use Illuminate\Http\Request;
//use Barryvdh\DomPDF\Facade\Pdf;



class SaleDetailsController extends Controller
{

    public function index()
    {
//        $sale_details = SaleDetails::all();
//        return view('dashboard.sale_invoices.show', compact('sale_details'));
    }

//    public function create()
//    {
//        return view('dashboard.sale_invoices.create');
//    }
//
//    public function store(Request $request)
//    {
//
//        dd($request);
//
//        SaleInvoice::create([
//            'id' => $request->id,
//            'invoice_number' => $request->invoice_number,
//            'item' => $request->item,
//            'ammount' => $request->ammount,
//            'price' => $request->price,
//            'note' => $request->note,
//            'client_name' => $request->client_name,
//            'client_address' => $request->client_address,
//            'client_email' => $request->client_email,
//            'client_phone' => $request->client_phone,
//            'created_at' => $request->created_at,
//            'updated_at' => $request->updated_at,
//        ]);
//
//
//        return redirect()->route('sale_invoices.index')->with('message' , " Invoice Added Successfully");
//    }
//
//    public function show($id)
//    {
//
//        $sale_invoices = SaleInvoice::find($id);
//        return view('dashboard.sale_invoices.show', compact('sale_invoices'));
//    }
//
//
//    public function edit($id)
//    {
//        $sale_invoices = SaleInvoice::find($id);
//        return view('dashboard.sale_invoices.edit' , compact('sale_invoices' ));
//
//    }
//
//
//    public function update(Request $request, $id)
//    {
//
//        $invoice = SaleInvoice::find($id);
//        $invoice->client_id = $request->client_id;
//
//        $invoice->save();
//        return redirect()->route('sale_invoices.index')->with('message' , "Invoice Updated Successfully");
//
//    }
//
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy($id)
//    {
//        SaleInvoice::find($id)->delete();
//        return redirect()->route('sale_invoices.index')->with('message' , "Invoice Deleted Successfully");
//
//    }

//    public function generatePDF()
//    {
//        $sale_invoices = SaleInvoice::get();
//
//        $data = [
//            'title' => 'Welcome to ItSolutionStuff.com',
//            'date' => date('m/d/Y'),
//            'sale_invoices' => $sale_invoices
//        ];
//
//        $pdf = PDF::loadView('dashboard.dom', $data);
//
//        return $pdf->download('itsolutionstuff.pdf');
//    }

}
