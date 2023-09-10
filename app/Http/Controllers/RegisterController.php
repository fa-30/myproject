<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\Clint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function registration()
    {
        return view('registration.loginrejester');
    }
    public function registrationlog()
    {
        return view('registration.registarlog');
    }


    public function user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clints',
            'password' => 'required|min:5|max:12',
        ]);
        $image = $request->file('photo');
        $imageName=$request->photo;
    if ($image) {
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $imageName);
}
    clint::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>Hash::make($request->password),
        'photo' => $imageName,
    ]);
    return redirect('registerlog');
}
public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        $user=Clint::where('email','=',$request->email)->first();
        if ($user){
          if(Hash::check($request->password,$user->password)){
            $request->session()->put('loginuserId',$user->id);
            return redirect('dashboarduser');
          }  else{
            return back()->with('fail','password not matches');
          }
        }else{
            return back()->with('fail','email not found pleace signup first');
          }

}
function dashboard(){
    $data=array();
    if(Session::has('loginuserId')){
      $data=Clint::where('id','=',Session::get('loginuserId'))->first();
    }
     return view('user after login.dashboarduser',compact('data'));
  }
  function logout(){
    $data=array();
    if(Session::has('loginuserId')){
      Session::pull('loginuserId');
    }
    return redirect('register');
  }

}