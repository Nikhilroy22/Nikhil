<?php

namespace App\Controllers;
use App\Models\Categories;
use App\Models\Musics;
class Home extends BaseController
{
    public function index()
    {
      
      $kk = new Categories();
      $mm = new Musics();
      $data['cats'] = $kk->orderBy('abs(unix_timestamp(created_at)) DESC')->findAll();
      $data['mm'] = $mm->orderBy('abs(unix_timestamp(created_at)) DESC')->findAll();
        echo view('header');
        echo view('index', $data);
        echo view('footer');
    }
    public function view($slug, $name){
      $kk = new Categories();
      $mm = new Musics();
      $pp = $mm->where('name', $name)->find();
      $data['puja'] = $mm->where('category_name', $slug)->first();
      if(empty($data['puja']) || empty($pp)){
        return '4000';
      }
         echo view('header');
        echo view('view', $data);
        echo view('footer');
      /*if (empty($pp)){
        if (empty($cc)){
        
        return '404';
      }
      $data['dd'] = $mm->where('category_name', $name)->find();
      
        echo view('header');
        echo view('cat', $data);
        echo view('footer');
        exit;
      }
      echo view('header');
        echo view('view');
        echo view('footer');
        */
    }
    public function kk($name){
      $kk = new Categories();
      $mm = new Musics();
      $cc = $kk->where('name', $name)->first();
      if ($cc){
          $data['dd'] = $mm->where('category_name', $name)->find();
      
        echo view('header');
        echo view('cat', $data);
        echo view('footer');
        
      }else{
    return $this->error404();
      }
    }
    public function error404(){
      header("HTTP/1.0 404 Not Found");
      echo view('header');
      echo view('404');
      echo view('footer');
    }
    
     public function load(){
    $request = service('request');
    $searchData = $request->getGet();

    $search = "";
    if(isset($searchData) && isset($searchData['search'])){
       $search = $searchData['search'];
    }

    // Get data 
    $users = new Musics();

    if($search == 'kk'){
      $paginateData = $users->paginate(1);
    }else{
      $paginateData = $users->select('*')
          ->orLike('name', $search)
        
          ->paginate(2);
    }

    $data = [
      'users' => $paginateData,
      'pager' => $users->pager,
      'search' => $search
    ];
echo view('header');
    echo view('search', $data); 
    echo view('footer');
  }
}
