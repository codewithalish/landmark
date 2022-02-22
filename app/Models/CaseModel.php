<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CaseModel extends Model
{
    protected $appends = ['liked'];
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

    public function scopeIsLiked($query)
    {
        return $query->select('cases.*')
            ->leftJoin('bookmarks', 'bookmarks.bookmarkable_id', '=', 'cases.id')
            ->where('bookmarks.user_id', Auth::id())
            ->where('bookmarkable_type', CaseModel::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function agent()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getLikedAttribute()
    {
        $bookmarked = Bookmark::query()
            ->where('bookmarkable_type', CaseModel::class)
            ->where('bookmarkable_id', $this->id)
            ->where('user_id', Auth::id())
            ->pluck('bookmarkable_id')->toArray();

        if (in_array($this->id, $bookmarked))
            return true;
        else
            return false;
    }
}
