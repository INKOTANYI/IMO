<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialPostTarget extends Model
{
    use HasFactory;

    protected $fillable = [
        'social_post_id',
        'social_account_id',
        'status',
        'external_post_id',
        'error_message',
    ];

    public function post()
    {
        return $this->belongsTo(SocialPost::class, 'social_post_id');
    }

    public function account()
    {
        return $this->belongsTo(SocialAccount::class, 'social_account_id');
    }
}
