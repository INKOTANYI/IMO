<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_user_id',
        'content',
        'link_url',
        'status',
        'scheduled_at',
        'published_at',
        'error_message',
    ];

    protected $casts = [
        'scheduled_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }

    public function targets()
    {
        return $this->hasMany(SocialPostTarget::class);
    }

    public function media()
    {
        return $this->belongsToMany(MediaFile::class, 'media_post')->withPivot('sort_order')->withTimestamps();
    }
}
