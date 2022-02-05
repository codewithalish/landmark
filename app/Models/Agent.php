<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
protected $table='users';
protected $fillable=[

    'name',
    'mobile',
    'password',
    'avatar_path',
    'address',
    'bio',
    'email',
    'body',
    'telegram',
    'whatsapp',
    'instagram',
];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function cases()
    {
        return $this->hasMany(CaseModel::class);
    }
}
