<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Order;
use App\Models\Waiter;
use App\Models\Product;
use App\Models\Table;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;



class WaiterController extends Controller
{

    public function index()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $waiters = Waiter::where('shop_id', $shop->id)->get();

        return view('dashboard.waiters.index', compact('waiters'));
    }

    public function create()
    {
        $user = Auth::user()->id;
        $shop = Shop::where('user_id', $user)->first();
        $tables = Table::where('shop_id', $shop->id)->get();

        return view('dashboard.waiters.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6',

        ]);

        $shop_user = Auth::user()->id;
        $shop = Shop::where('user_id', $shop_user)->first();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->type = 3;
        $user->save();

        $waiter = new Waiter();
        $waiter->name = $request->name;
        $waiter->shop_id =  $shop->id;
        $waiter->user_id = $user->id;
        $waiter->save();

        if ($request->tables) {
            $tablesId = $request->input('tables');
            $validator = Validator::make(['table_id' => $tablesId], [
                'table_id' => 'unique:table_waiter,table_id',
            ]);
            if ($validator->fails()) {
                return redirect()->back()->with('error', 'This Table Is Already Taken By Another Waiter. Select Different Table and try again.');
            } else {
                // If validation passes, attach the tables
                $waiter->tables()->attach($tablesId);
            }
        }

        return redirect()->route('waiters.index')->with('message', "Waiter Added Successfully");
    }

    public function edit($id)
    {
        $waiter = Waiter::find($id);
        $user = User::where('id', $waiter->user_id)->first();

        $userr = Auth::user()->id;
        $shop = Shop::where('user_id', $userr)->first();
        $tables = Table::where('shop_id', $shop->id)->get();


        return view('dashboard.waiters.edit', compact('waiter', 'user', 'tables'));
    }

    public function update(Request $request, $id)
    {
        $waiter = Waiter::find($id);
        $user = User::where('id', $waiter->user_id)->first();

        if ($request->password == null) {
            $password = $user->password;
        } else {
            $password = Hash::make($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->type = 3;
        $user->save();

        $waiter->name = $request->name;
        $waiter->save();

        $newTablesIds = $request->input('tables');
        $validator = Validator::make(['table_id' => $newTablesIds], [
            'table_id' => 'unique:table_waiter,table_id',
        ]);
        if ($validator->fails()) {

            return redirect()->back()->with('error', 'This Table Is Already Taken By Another Waiter. Select Different Table and try again.');
        } else {
            $waiter->tables()->sync($newTablesIds);
            $removedTablesIds = $waiter->tables->pluck('id')->diff($newTablesIds)->all();
            $waiter->tables()->detach($removedTablesIds);
        }

        return redirect()->route('waiters.index')->with('message', "Waiter Updated Successfully");
    }

    public function destroy($id)
    {
        $waiter = Waiter::find($id);
        $user = User::where('id', $waiter->user_id)->delete();
        $waiter->delete();
        return redirect()->route('waiters.index')->with('message', "Waiter Deleted Successfully");
    }

    public function checkWaiterOrders($waiter_id)
    {
        $newOrdersWaiter = Order::where('waiter_id', $waiter_id)
            ->where('status', 0) // Assuming 'status 0' represents new orders
            ->with('table')
            ->get();

        return response()->json(['newOrdersWaiter' => $newOrdersWaiter]);
    }

    public function order()
    {
        $user = Auth::user()->id;
        $waiter = Waiter::where('user_id', $user)->first();
        $waiter_id = $waiter->id;
        $orders = Order::where('status', 0)
            ->where('waiter_id', $waiter_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.waiterorders.index', compact('orders'));
    }

    public function acceptedOrder()
    {
        $user = Auth::user()->id;
        $waiter = Waiter::where('user_id', $user)->first();
        $waiter_id = $waiter->id;
        $orders = Order::where('status', 1)
            ->where('waiter_id', $waiter_id)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('dashboard.waiterorders.acceptedOrder', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        $order_details = OrderDetails::where('order_id', $id)->get();
        $productss = Product::where('shop_id', $order->shop_id)->get();
        return view('dashboard.waiterorders.create', compact('order', 'order_details', 'productss'));
    }

    public function showacceptedOrder($id)
    {
        $order = Order::find($id);
        $order_details = OrderDetails::where('order_id', $id)->get();
        return view('dashboard.waiterorders.showAcceptedOrder', compact('order', 'order_details'));
    }

    public function waitergetPrice(Request $request)
    {
        //        dd($request);
        $data['AllPrices'] = Product::where('id', $request->product_id)->get(["price"]);
        return response()->json($data);
    }

    public function orderapprove(Request $request)
    {
        $order = Order::find($request->order_id);
        $order->total = $request->total;
        $order->status = 1;
        $order->save();

        if (isset($request->product_id)) {

            foreach ($request->input('product_id') as $key => $id) {
                $orderDetails = OrderDetails::where('order_id', $request->order_id)
                    ->where('product_id', $id)->update(
                        [
                            'quantity' => $request->quantity[$key],
                            'price' => $request->price[$key],
                            'total' => $request->subtotal[$key],
                        ]
                    );
            }
        }
        return redirect()->route('acceptedOrders.index')->with('message', "Order Approved Successfully");
    }
}
