<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
//all admin in dashbord
    function index()
    {
        $admins=Admin::get();
        return view('admin after login.show.indexadmin',compact('admins'));
    }
  //delete admin in dashbord
    function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('indexadmin');
    }
      //update admin in dashbord
    function update($id)
    {
        $admin=Admin::find($id);
        return view('updateadmin',compact('admin'));
    }
    function edit($id,Request $request)
    {
        $admin = Admin::find($id);
       $imagename=$admin->photo;

        if ($request->hasFile('photo')) {
            $image =$request->file('photo');
            $imagename=time().".".$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imagename);
            $mimeType = $image->getClientMimeType();
        }
        $admin->update([
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'photo' => $imagename,
        ]);
        
        return redirect()->route('indexadmin');
    }
     
//add admin in dashbord
   function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $image = $request->file('photo');
        $imageName=$request->photo;
    if ($image) {
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
}
Admin::create([
    'email' => $request->email,
    'password' =>Hash::make($request->password),
    'photo' => $imageName,
]);
    
    return redirect()->route('indexadmin');
    }
}
