<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    use HasFactory;
    protected $fillable = [

        'key',
        'value',
    ];

    public function scopeKey($query, $key)
    {
       return $query->where('key', $key)->first()->value;
    }
}
