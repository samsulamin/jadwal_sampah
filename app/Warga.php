<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warga extends Model
{
    use Notifiable, SoftDeletes;
    protected $table = 'warga';
    protected $fillable = [
        'desa_id', 'nik', 'namawarga', 'rt', 'rw', 'email', 'password', 'latittude', 'longitude','status'
    ];

    protected $dates = ['deleted_at'];


    public function notifikasi(){
    	return $this->hasMany('App\Notifikasi');
    }
}

