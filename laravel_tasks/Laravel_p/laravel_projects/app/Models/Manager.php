<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;


class manager extends Authenticable
{
    use HasFactory;

    protected $guard = 'manager';

     protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
