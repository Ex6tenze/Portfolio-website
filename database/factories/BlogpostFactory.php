<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\Blogpost;
use Illuminate\Support\Str;

class BlogpostFactory extends Factory
{
    protected $blogpost = Blogpost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'title' => Str::random(10),
        'excerpt' => Str::random(20),
        'body' => Str::random(1000)
        ];
    }
}
