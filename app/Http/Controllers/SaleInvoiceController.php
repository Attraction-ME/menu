<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\SaleDetails;
use App\Models\SaleInvoice;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Barryvdh\DomPDF\Facade\Pdf;


class SaleInvoiceController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $shop_id = $shop->id;
        $sale_invoices = SaleInvoice::where('shop_id', $shop_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.sale_invoices.index', compact('sale_invoices'));
    }

    public function create()
    {
        return view('dashboard.sale_invoices.create');
    }

    public function store(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->total = $request->total;
        $order->status = 1;
        $order->save();

        OrderDetails::where('order_id', $request->order_id)->delete();
    
        if ( isset($request->product_id) ) {

            foreach ($request->input('product_id') as $key => $class) {
                $orderDetails = OrderDetails::where('order_id',$request->order_id)->updateOrCreate(
                    [
                        'order_id' => $order->id,
                        'product_id' => $class,
                    ],
                    [
                        'quantity' => $request->quantity[$key],
                        'price' => $request->price[$key],
                        'total' => $request->subtotal[$key],
                    ]
                );
            }
            
        }
        return redirect()->route('acceptedOrder.index')->with('message' , "Order Approved Successfully");
    }

    public function show($id)
    {

        $sale_invoices = SaleInvoice::find($id);

        return view('dashboard.sale_invoices.show', compact('sale_invoices'));
    }


    public function edit($id)
    {
        $sale_invoices = SaleInvoice::find($id);
        return view('dashboard.sale_invoices.edit', compact('sale_invoices'));

    }


    public function update(Request $request, $id)
    {

        $invoice = SaleInvoice::find($id);
        $invoice->client_id = $request->client_id;

        $invoice->save();
        return redirect()->route('sale_invoices.index')->with('message', "Invoice Updated Successfully");

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SaleInvoice::find($id)->delete();
        return redirect()->route('sale_invoices.index')->with('message', "Invoice Deleted Successfully");

    }

}
