<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Session;
class ProductsController extends Controller
{
    //all in dashboarduser
    public function index()
    {
        $products = Product::all();
        return view('user after login.products', compact('products'));
    }
  //view cart
    public function cart()
    {
        $products=Product::get();
        return view('user after login.cart',compact('products'));
     
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
  
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }  else {
            $cart[$id] = [
                "name" => $product->name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
  
  //delete product from cart
    public function delete($id)
    {
        $cart = session('cart');
    
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Product removed from cart.');
    }
//make order
public function store(Request $request)
{
    $clientId = session()->get('loginuserId');

    $order = Order::create([
        'price' => $request->total,
        'clint_id' => $clientId,
    ]);
    $cart = session()->get('cart', []);

    foreach ($cart as $id => $details) {
        $product = Product::findOrFail($id);

        $orderProduct = new OrderProduct();
        $orderProduct->order_id = $order->id;
        $orderProduct->product_id = $product->id;
        $orderProduct->save();}

    session()->forget('cart');

    return redirect()->route('products')->with('success', 'your order is create!');
}
}