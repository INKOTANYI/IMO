<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider',
        'account_id',
        'name',
        'username',
        'access_token',
        'refresh_token',
        'token_expires_at',
        'status',
    ];

    protected $casts = [
        'token_expires_at' => 'datetime',
    ];

    public function postTargets()
    {
        return $this->hasMany(SocialPostTarget::class);
    }
}
