<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title'
    ];

    public function agents()
    {
        return $this->belongsToMany(Agent::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
