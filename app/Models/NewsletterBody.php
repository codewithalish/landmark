<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterBody extends Model
{
    use HasFactory;
    protected $table='newsletter_bodies';
    protected $fillable=['body','user_id'];
}
