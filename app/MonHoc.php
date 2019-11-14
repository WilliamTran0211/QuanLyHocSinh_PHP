<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $fillable = [
        'MaMH', 'TenMH'
    ];

    protected $table='monhoc';
}
