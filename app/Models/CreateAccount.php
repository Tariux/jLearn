<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateAccount extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'email',
        'password',
        'mobile',
        'favorites'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
