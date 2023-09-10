<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
  //all indashboard
    public function index()
    {
        $orders=order::get();
        return view('admin after login.show.indexorder',compact('orders'));
    }

  //order username indashboord
    public function show(string $id)
    {
        $order=order::find($id);
        return view('admin after login.show.showorder',compact('order'));
    }
    public function showProducts($orderId)
{
    $order = Order::find($orderId);
    $products = $order->products; // Assuming you have defined the relationship between Order and Product models
    
    return view('productorder', compact('products'));
}
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
 

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
