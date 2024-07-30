<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Auths;
class Auth extends BaseController
{
    public function singup()
    {
      
      if(!$this->request->is('post')){
        echo view('header');
        echo view('singup');
        echo view('footer');
      }
      else{
      echo 'post';
      }
    }
    public function login()
    {
      
      if(!$this->request->is('post')){
        echo view('header');
        echo view('login');
        echo view('footer');
      }
      else{
        $session = session();
        $auth = new Auths();
        $password = $this->request->getVar('password');
        $user = $auth->where('password', $password)->first();
 
        if(is_null($user)) {
            return redirect()->back()->withInput()->with('error', 'Invalid Name');
        }
        
         
            
         
 
        $session->set($user);
        return $this->response->redirect(site_url('/admin'));
         
    }
    
    
}
 public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}