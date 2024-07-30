<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Musics;
use App\Models\Categories;
class Admin extends BaseController
{
  public function index(){
    echo view('header');
        echo view('admin');
        echo view('footer');
    
    
  }
     public function upload(){
      $mm = new Categories();
      $data['categories'] = $mm->findAll();
        echo view('header');
        echo view('upload', $data);
        echo view('footer');
    }
    public function postupload(){
     $file = $this->request->getFile('file');
      $category = $this->request->getVar('category');
     
     $newName = $file->getClientName();
  $ex = $file->getExtension();
  $file->move('./sdcard/' . $category, $newName);
        $data = [
          'name' => $newName,
          'category_name' => $category,
          'type' => $ex,
          ];           
     $mm = new Musics();
     $mm->save($data);
      return redirect()->back()->with('upload', 'successfully upload');
    }
    public function addcategory(){
   /* 
      echo $_SERVER['HTTP_HOST']; 
   $ww = 'Nikhil';
// Desired directory structure
$structure = './depth1/kl/' . $ww;

// To create the nested structure, the $recursive parameter 
// to mkdir() must be specified.

if (!mkdir($structure, 0777, true)) {
    die('Failed to create directories...');
}

// ...
     */
     echo view('header');
        echo view('addcategory');
        echo view('footer');
    }
    public function postcategory(){
      $val = \Config\Services::validation();
    $vv = [
    'category' => 'required|max_length[500]'
    ];
       if (!$this->validate($vv)) {
            session()->setFlashdata('errors', $val->getError('category'));
      return redirect()->back();
       }
      
      $mm = new Categories();
      $category = $this->request->getVar('category');
      $pp = './sdcard/' . $category;
      
   if(mkdir($pp)){
 
      $mm->save([
        'name' => $category
        
        ] );
      
      return redirect()->back()->with('category', 'successfully saved');
      
   }
    }
    public function delete($name){
		$model = new Categories();
		$mm = new Musics();
		
	
$dat = $mm->where('name', $name)->delete();
$data = $model->where('name', $name)->delete();

session()->setFlashdata('delete', 'Delete');
      return redirect()->back()->withInput();
      
    }
    public function error404(){
      header("HTTP/1.0 404 Not Found");
      echo view('header');
      echo view('404');
      echo view('footer');
    }
    public function edit($id){
      
      $model = new Categories();
      $data['user'] = $model->where('id', $id)->first();
      	if (empty($data['user']))
        {
         return $this->error404();
        }
        echo view('header');
        echo view('edit', $data);
        echo view('footer');
      
    }
    public function update(){
      
      $model = new Categories();
      $id = $this->request->getVar('id');
      $data = [
        'name' => $this->request->getVar('text'),
        ];
        $nn = $this->request->getVar('text');
        
        if(rename('./sdcard/you/', $nn )){
          
        $model->update($id, $data);
      return redirect()->back()->withInput();
        }
      
      
    }
}
