<?php
namespace Nikhil;
use Nikhil\Nikhilroy;
class puja{
  public function index(){
    $pp = new Nikhilroy();
    
    return $pp->pujabd();
    
  }
  
  
}
