<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('Auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->is_Admin==1)
        {
            return redirect()->route('Users.Orders'); 
        }
        $orders =Order::latest()->where('id',auth()->user()->id)->get();
        return view('home', compact('orders'));
    }
}
