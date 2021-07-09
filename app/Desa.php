<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Desa extends Model
{
    use SoftDeletes, Notifiable;

    protected $table = "desa";
    protected $fillable = ['desa','kecamatan_id','kabupaten','email','password','status'];
}
