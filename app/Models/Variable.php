<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    use HasFactory;
    protected $table='variables';

    protected $fillable = [
        'key',
        'value'
    ];

    public function scopeVal($query, $key)
    {
       return $query->where('Key', $key)->first()->value;
    }
}
