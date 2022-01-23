<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'weight',
        'user_id',
        'size',
        'material',
        'color',
        'guaranty',
        'price',
        'status',
        'avatar_path',
        'video_path',
        'is_vip',
        'description',
        'details'
    ];
}
