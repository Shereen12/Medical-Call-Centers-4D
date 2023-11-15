<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;   


class UserInfo extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'user_info';

}
