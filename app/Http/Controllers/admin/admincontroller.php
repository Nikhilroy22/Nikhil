<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categorys;
use App\Models\postmodel;

class admincontroller extends Controller
{
    public function index(){
     
      return view('admin.index');
    }
    
  public function addpostview(){
      $ccc = categorys::all();
      return view('admin.addpost', ['sss' => $ccc]);
    }  
    
    public function addpost(Request $res){
   $ooo = $res->validate([
        'category' => 'required',
        'slug' => 'required|unique:postmodels|unique:categorys',
        'body' => 'required',
      //  'file' => 'required',
       
        ],[
          'category.required' => 'The Category select'
          ]);
          
     // $file = $res->file('file');
    //    $fileName = $file->getClientOriginalName();
   //     $filePath = $file->storeAs('uploads', $fileName); 
        
          postmodel::create([
              'title' => $res->slug,
              'body' => $res->body,
              'slug' => $res->slug,
              'category' => $res->category,
              
              ]);
          
      return redirect()->back()->with('saved', 'Successfully Saved Data');
      
    }
    public function addcat(Request $res){
      $res-> validate([
        'slug' => 'required|unique:postmodels|unique:categorys'
        ]);
        categorys::create([
          'name' => $res->slug,
          'slug' => $res->slug
          ]);
        
      return 'kata';
      
    }
 
}
