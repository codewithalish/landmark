<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterSent extends Model
{
    use HasFactory;

    protected $table='newsletter_sent';
    protected $fillable=['body','user_id'];
}
