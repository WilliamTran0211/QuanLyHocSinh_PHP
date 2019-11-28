<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocSinh extends Model
{
   protected $table = 'hocsinh';
   protected $primaryKey = 'MaHS';
   public $timestamps = false;
}
