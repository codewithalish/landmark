<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends User
{
protected $table='users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'address',
        'bio',
        'telegram',
        'whatsapp',
        'avatar_path'

    ];


}
