<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Case_Feature extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_id',
        'feature_id',
    ];
}
