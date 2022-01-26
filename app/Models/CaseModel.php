<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{

    protected $table = 'cases';
    use HasFactory;

    protected $fillable = [
        'case_id',
        'feature_id',
        'status',
        'address'
    ];
}
