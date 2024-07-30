<?php

namespace App\Models;

use CodeIgniter\Model;

class Auths extends Model
{
    protected $table            = 'auth';
    protected $primaryKey       = 'id';
  
    protected $allowedFields    = ['username','password'];

 
}
