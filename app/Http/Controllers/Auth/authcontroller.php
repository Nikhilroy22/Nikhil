<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class authcontroller extends Controller
{
    public function loginview(){
      return view('Auth.login');
      
    }
    public function loginstore(Request $res){
      
   $aaa = $res->validate([
      'username' => 'required',
      'password' => 'required',
      ]);
      if(Auth::attempt($aaa)){
      
        return redirect('/');
      }
      return redirect()->back()->with('message', 'Wrong Password and Username');
        
    
    }
    
    public function logout(Request $res){
      
      Auth::guard('web')->logout();

        $res->session()->invalidate();

        $res->session()->regenerateToken();

        return redirect('/');
    }
}
