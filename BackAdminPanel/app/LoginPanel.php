<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginPanel extends Model
{
    //
    private $fillable = ['name', 'lastname', 'phone', 'email', 'role', 'password', 'verified'];
}
