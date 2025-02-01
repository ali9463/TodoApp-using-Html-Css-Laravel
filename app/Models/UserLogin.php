<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserLogin extends Authenticatable
{
    use HasFactory;

    // Specify the table name explicitly if it's not the plural form of the model name
    protected $table = 'logindata';

    // Specify the fields that can be mass-assigned
    protected $fillable = ['email', 'password'];
}
