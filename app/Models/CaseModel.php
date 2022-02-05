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
        'address',
        'title',
        'room_number',
        'parking_number',
        'bath_number',
        'price',
        'deposit',
        'rent',
        'contract',
        'type',
        'avatar_path',
        'is_vip',
        'description',
        'area',

    ];

    public function scopeIsVIP($query)
    {
        return $query->where('is_vip', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class );
    }


    public function agent()
    {
        return $this->belongsTo(User::class , 'user_id');
    }


}
