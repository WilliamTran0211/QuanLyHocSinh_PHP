<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    protected $table = 'giaovien';
    protected $primaryKey = 'MaGV';
    public $timestamps = false;
}
