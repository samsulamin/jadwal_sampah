<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    
    protected $table = 'jadwal';

    protected $fillable = [
        'desa_id','sunday', 'monday', 'tuesday', 'wednesday', 'thrusday', 'friday', 'saturday'
    ];
}
