<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Make sure you import the Post model

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate dummy data for the Post model
        Post::factory()->count(10)->create();
    }
}
