<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        Photo::create(['title' => 'Community Event', 'image' => 'event1.jpg']);
        Photo::create(['title' => 'Child Support', 'image' => 'child1.jpg']);
    }
}
