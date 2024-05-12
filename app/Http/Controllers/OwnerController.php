<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::all();
        return view('dashboard.owners.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('owners'), $imageName);

        Owner::create([
            'name' => $request->name,
            'job' => $request->job,
            'desc' => $request->desc,
            'image' => $imageName,
        ]);
        return redirect()->route('owners.index')->with('message' , " Owners Add Successfully");

    }


    /**
     * Display the specified resource.
     */
    public function show(Owner $owner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('dashboard.owners.edit' , compact('owner' ));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $owner = Owner::find($id);


        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('owner'), $imageName);
        }else{
            $imageName = $owner->image;
        }


        $owner->name = $request->name;
        $owner->job = $request->job;
        $owner->desc = $request->desc;
        $owner->image = $imageName;

        $owner->save();
        return redirect()->route('owners.index')->with('message' , "Owner Update Successfully");

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $owners = Owner::find($id)->delete();
        return redirect()->route('owners.index')->with('message' , "Owner Deleted Successfully");

    }
}
