<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('website.login');
    }

    public function login(Request $request)
    {

        if (Auth::guard('customers')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $customer = Auth::guard('customers')->user();
            return redirect()->route('website.profile', ['id' => $customer->id]);
        } else {
            return redirect()->route('login_customer')->with('error', 'Email or password is incorrect.');
        }
    }

    public function logout()
    {
        session()->forget('cart');
        auth('customers')->logout();
        return redirect('/');
    }
}