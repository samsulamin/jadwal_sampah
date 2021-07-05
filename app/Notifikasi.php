<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = "notifikasi";
    protected $fillable = ['email', 'desa_id', 'latitude', 'longitude', 'status'];
    protected $dates = ['deleted_at'];

    public function warga(){
        return $this->belongsTo('App\Warga');
    }
}

