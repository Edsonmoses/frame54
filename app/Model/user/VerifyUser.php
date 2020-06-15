<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Model\user\User', 'user_id');
    }
}
