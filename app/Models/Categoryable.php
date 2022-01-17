<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoryable extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryable_id',
        'categoryable_type',
        'category_id'
    ];
}
