<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Petugas extends Model
{
    use Notifiable, SoftDeletes;
    protected $guard = 'petugas';
    protected $table = 'petugas';
    
    protected $fillable = [
        'desa_id', 'nama', 'email', 'password', 'status'
    ];
    
    protected $hidden = ['password'];
    protected $dates = ['deleted_at'];
}
