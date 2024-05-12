<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Order;
use App\Models\Table;
use App\Models\Product;
use App\Events\OrderSaved;
use App\Events\OrderPlaced;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Events\NewOrderEvent;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;


class OrderController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $shop_id = $shop->id;
        $orders = Order::where('status', 0)
            ->where('shop_id', $shop_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.orders.index', compact('orders'));
    }

    public function acceptedOrder()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $shop_id = $shop->id;
        $orders = Order::where('status', 1)
            ->where('shop_id', $shop_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.orders.acceptedOrder', compact('orders'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

       if(!$request->table_id  || !$request->product_id  ){
        return redirect()->back()->with('message' , "You Must Choise Order");
       }
       if($request->waiter_id == 0 ){
        return redirect()->back()->with('message' , "You Must Choise Waiter");
       }

    $table = Table::find($request->table_id);
    $link = $table->link;
    $shop = Shop::find($request->shop_id);

       $latitude = $request->input('latitude');
       $longitude = $request->input('longitude');

        // Restaurant's coordinates
        $restaurantLatitude = $shop->latitude;
        $restaurantLongitude = $shop->longitude;

        // Calculate distance using Haversine formula
        $distance = $this->calculateDistance($latitude, $longitude, $restaurantLatitude, $restaurantLongitude);

        // Set a maximum allowed distance (adjust as needed)
        $maxDistance = 1; // Example maximum distance in kilometers

        // Check if the client is within the allowed distance
        if ($distance > $maxDistance) {
            return redirect()->back()->with('message' , "You Are Too Far From The Restaurant to Place An Order Check Your GPS Location");
        }

        // store the order in the database
        $order = new Order();
        $order->table_id  = $request->table_id;
        $order->shop_id  = $request->shop_id;
        $order->waiter_id  = $request->waiter_id;
        $order->total  = $request->total;
        $order->status  = 0 ;
        $order->save();
        foreach ($request->product_id  as $key=> $id ) {

            $order_details = new OrderDetails();
            $order_details->order_id  = $order->id;
            $order_details->product_id  = $id;
            $order_details->quantity  = $request->quantity[$key];
            $order_details->price  = $request->price[$key];
            $order_details->total = $request->subtotal[$key];
            $order_details->save();
        }


        session()->forget('cart');
        session()->forget('selectWaiter');
        return redirect()->route('website.shopp',$shop->slug)->with('done', 'Order Added Successfully');
    }
    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        $earthRadius = 6371; // in kilometers

        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;

        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $distance = $earthRadius * $c;

        return $distance;
    }

    public function checkNewOrders($shop_id)
{
    $newOrdersCount = Order::where('shop_id', $shop_id)
        ->where('status', 0) // Assuming 'status 0' represents new orders
        ->with('table')
        ->get();

    return response()->json(['newOrdersCount' => $newOrdersCount]);
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        $order_details = OrderDetails::where('order_id', $id)->get();
        $productss = Product::where('shop_id', $order->shop_id)->get();
        return view('dashboard.orders.create', compact('order' , 'order_details' ,'productss'));
    }

    public function showacceptedOrder($id)
    {
        $order = Order::find($id);
        $order_details = OrderDetails::where('order_id', $id)->get();
        return view('dashboard.orders.showAcceptedOrder', compact('order' , 'order_details' ));
    }

    public function getPrice(Request $request)
    {
//        dd($request);
        $data['AllPrices'] = Product::where('id',$request->product_id)->get(["price"]);
        return response()->json($data);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
