<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class profile extends Authenticatable
{
    protected $fillable = ['name', 'email', 'phone', 'password'];
}
