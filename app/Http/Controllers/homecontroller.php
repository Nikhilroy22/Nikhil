<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postmodel;
use App\Models\categorys;

class homecontroller extends Controller
{
  public function index(){
    
     $user = postmodel::all();
  $cat = categorys::all();
  
    return view('home', ['user' => $user,
    'cats' => $cat]);
  }
}
