<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Account extends Authenticatable
{
    //

    protected $fillable = ['id','name','email','password'];
}
