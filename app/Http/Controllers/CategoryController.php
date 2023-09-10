<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   //all in dashbord
    public function index()
    {
        $categories=Category::get();
        return view('admin after login.show.indexcategory',compact('categories'));
    }

      //add in dashbord
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
       
        Category::create([
            'name' => $request->name,
        ]);
        
        return redirect()->route('indexcategory');
    }

     function destroy($id)
     {
        Category::find($id)->delete();
         return redirect()->route('indexcategory');
     }
     // show productscatigory in
     public function show(string $id)
     {
         $category=Category::find($id);
         return view('admin after login.show.showproductcategory',compact('category'));
     }
}