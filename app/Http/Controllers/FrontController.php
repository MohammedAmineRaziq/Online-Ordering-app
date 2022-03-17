<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Pizza;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->category){
            $pizzas = Pizza::latest()->get();
            return view('frontpage', compact('pizzas'));
        }
        $pizzas = Pizza::where('category',$request->category)->get();
        return view('frontpage', compact('pizzas'));
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);
        return view('show',compact('pizza'));
    }

    public function store(Request $request)
    {
        if($request->small_pizza==0 && $request->medium_pizza==0 && $request->large_pizza==0)
        {
            return redirect()->back()->with('error-message','You must order at least one pizza .');
        }
        if($request->small_pizza < 0 || $request->medium_pizza < 0 || $request->large_pizza<0)
        {
            return back()->with('error-message','Pizza number should not be a negative number.');
        }
        if($request->phone ==0 )
        {
            return back()->with('error-message','Please Ente your phone number  .');
        }
        Order::create([
            'time' => $request->time,
            'date' => $request->date,
            'user_id' => auth()->user()->id,
            'pizza_id' => $request->pizza_id,
            'small_pizza' => $request->small_pizza,
            'medium_pizza' => $request->medium_pizza,
            'large_pizza' => $request->large_pizza,
            'message' => $request->message,
            'phone' => $request->phone
        ]);
        return back()->with('success-message', 'Your order was successfull');
    }
}
