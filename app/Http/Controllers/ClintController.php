<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\Clint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class ClintController extends Controller
{
    //all in dashbord
    function index()
    {
        $users=Clint::get();
        return view('admin after login.show.indexuser',compact('users'));
    }
    //in dashboard
    function destroy($id)
    {
        Clint::find($id)->delete();
        return redirect()->route('indexuser');
    }
    //searchforuser in dashboard
function searchuser(Request $request)
{

    $search =$request->searchuser;
    $users = Clint::where(function($query) use($search){
        $query->where('email','like',"%$search%");
    }) ->get();
    return view('admin after login.show.indexuser',compact('users','search'));

}

// updateprofile in dashboarduser
function update()
{
    $user=array();
    if(Session::has('loginuserId')){
       $user=Clint::where('id','=',Session::get('loginuserId'))->first();
    }
    return view('user after login.updateuser',compact('user'));
}
function edit($id,Request $request)
{
    $user = Clint::find($id);
   $imagename=$user->photo;

    if ($request->hasFile('photo')) {
        $image =$request->file('photo');
        $imagename=time().".".$image->getClientOriginalExtension();
        $image->move(public_path('images'),$imagename);
        $mimeType = $image->getClientMimeType();
    }
    $user->update([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>Hash::make($request->password),
        'photo' => $imagename,
    ]);
    
    return redirect()->route('dashboarduser');
}

//show myorders in dashboarduser
function show()
{
    $user=array();
    if(Session::has('loginuserId')){
       $user=Clint::where('id','=',Session::get('loginuserId'))->first();
    }
    return view('user after login.show',compact('user'));
}

}
