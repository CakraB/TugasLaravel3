<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'event_id','nama_perusahaan','alamat_perusahaan'
    ];
}
