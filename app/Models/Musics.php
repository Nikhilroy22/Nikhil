<?php

namespace App\Models;

use CodeIgniter\Model;

class Musics extends Model
{
    protected $table            = 'musics';
    protected $primaryKey       = 'id';
   
    protected $allowedFields    = ['name','category_name','slug','type'];

}
