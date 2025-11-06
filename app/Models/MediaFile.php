<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'disk', 'path', 'mime', 'size', 'width', 'height', 'created_by_user_id'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function posts()
    {
        return $this->belongsToMany(SocialPost::class, 'media_post')->withPivot('sort_order')->withTimestamps();
    }
}
