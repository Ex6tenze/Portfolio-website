<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blogpost;

class BlogpostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blogpost::factory()->count(100)->create();
    }
}
