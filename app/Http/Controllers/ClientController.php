<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::all();
        return view('dashboard.clients.index', compact('clients'));
    }


    public function create()
    {
        return view('dashboard.clients.create');
    }


    public function store(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
        ]);
        return redirect()->route('clients.index')->with('message', "Client Added Successfully");

    }


    public function edit($id)
    {
        $clients = Client::find($id);
        return view('dashboard.clients.edit' , compact('clients' ));

    }

    public function update(Request $request, $id)
    {

        $clients = Client::find($id);

        $clients->name = $request->name;
        $clients->phone = $request->phone;
        $clients->email = $request->email;
        $clients->address = $request->address;

        $clients->save();
        return redirect()->route('clients.index')->with('message' , "Client Updated Successfully");

    }


    public function destroy($id )
    {
        Client::find($id)->delete();
        return redirect()->route('clients.index')->with('message' , "Client Deleted Successfully");

    }
}
