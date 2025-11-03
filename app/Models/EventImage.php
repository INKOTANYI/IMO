<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class EventImage extends Model
{
    protected $fillable = [
        'event_id',
        'image_path',
        'caption',
        'position',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
