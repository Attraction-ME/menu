<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{

    public function index($id)
    {
        $customers = Customer::find($id);
        return view('website.profile', compact('customers'));
    }
}