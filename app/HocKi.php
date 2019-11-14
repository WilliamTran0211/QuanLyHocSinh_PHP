<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HocKi extends Model
{
    protected $fillable = [
        'MaHK', 'LoaiHK', 'NamBatDau', 'NamKetThuc'
    ];

    protected $table='hocki';
}
