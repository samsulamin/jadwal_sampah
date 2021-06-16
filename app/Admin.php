<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $table = 'admin';

    protected $fillable = [
        'name', 'email', 'desaid', 'password','email_verfied_at', 'ststus'
    ];

    protected $hidden = ['password'];
}
