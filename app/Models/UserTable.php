<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum;

class UserTable extends Model
{
    use HasApiTokens;
    use HasFactory;
    public $table = 'user_tables';
    protected $fillable = [
        'name',
        'email',
        'password',
        'c_password',
        'role',
    ];


}
