<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Disability Awareness Campaign',
            'location' => 'Kicukiro District, Rwanda',
            'date_time' => '2025-10-15 10:00:00',
            'description' => 'A campaign to raise awareness about disabilities.',
            'image' => 'event1.jpg',
        ]);
    }
}