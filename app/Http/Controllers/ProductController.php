<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
//all in dashbord
    function index()
    {
        $products=Product::get();
        return view('admin after login.show.index',compact('products'));
    }
    //all in dashborduser
    function show($id)
    {
        $product=Product::findOrFail($id);
        return view('user after login.show',compact('product'));
    }
    //in dashbord
    function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('index');
    }
     //in dashbord
    function update($id)
    {
        $product=Product::find($id);
        return view('update',compact('product'));
    }
    function edit($id,Request $request)
    {
        $product = Product::find($id);
       $imagename=$product->photo;

        if ($request->hasFile('photo')) {
            $image =$request->file('photo');
            $imagename=time().".".$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imagename);
            $mimeType = $image->getClientMimeType();
        }
        $product->update([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'availability' => $request->product_availability,
            'category_id' => $request->category_id,
            'photo' => $imagename,
        ]);
        
        return redirect()->route('index');
    }
      //in dashbord
   function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_availability' => 'required|in:available,unavailable',
            'category_id' => 'required|exists:categories,id',
         
        ]);
        $image = $request->file('photo');
        $imageName=$request->photo;
    if ($image) {
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
}
    Product::create([
        'name' => $request->product_name,
        'price' => $request->product_price,
        'availability' => $request->product_availability,
        'category_id' => $request->category_id,
        'photo' => $imageName,
    ]);
    
    return redirect()->route('index');
}
 //in dashbord
function search(Request $request)
    {

        $search =$request->search;
        $products = Product::where(function($query) use($search){
            $query->where('name','like',"%$search%")->orwhere('category_id','like',"%$search%");
        }) ->get();
        return view('admin after login.show.index',compact('products','search'));

    }
    //in dashboarduser
    function search2(Request $request)
    {

        $search =$request->search;
        $products = Product::where(function($query) use($search){
            $query->where('name','like',"%$search%")->orwhere('price','like',"%$search%");
        }) ->get();
        return view('user after login.products',compact('products','search'));

    }
}