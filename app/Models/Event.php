<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'date_time',
        'description',
        'image',
    ];

    protected $casts = [
        'date_time' => 'datetime',
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class);
    }
}