<?php

namespace App\Http\Controllers;
use Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
  public function index()
  {
      
  }

    public function loginn()
    {
        return view('registration.login');
    }

    public function login(Request $request)
    {
      $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:5|max:12',
    ]);
    $user=Admin::where('email','=',$request->email)->first();
    if ($user){
      if(Hash::check($request->password,$user->password)){
        $request->session()->put('loginId',$user->id);
        return redirect('dashboardadmin');
      }  else{
        return back()->with('fail','password not matches');
      }
    }else{
      return back()->with('fail','email not found pleace signup first');
    }
}

function dashboard(){
  $data=array();
  if(Session::has('loginId')){
    $data=Admin::where('id','=',Session::get('loginId'))->first();
  }
   return view('admin after login.dashboord',compact('data'));
}
function logout(){
  $data=array();
  if(Session::has('loginId')){
    Session::pull('loginId');
  }
  return redirect('logadmin');
}
}

