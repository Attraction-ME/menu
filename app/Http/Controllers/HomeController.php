<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        return view('dashboard.homepage');
    }

    public function index()
    {
        return view('website.main');
    }

    public function managerDashboard()
    {
        return view('dashboard.managerpage');
    }

    public function superAdminDashboard()
    {

        return view('dashboard.homepage');
    }
    public function waiterDashboard()
    {

        return view('dashboard.waiterpage');
    }
}
