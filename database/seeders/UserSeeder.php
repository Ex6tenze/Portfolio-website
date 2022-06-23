<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => "Jesper",
            'email' => "jbertijn@hotmail.nl",
            'password' => Hash::make('x@gNJGDBm3?A_]CfP9VQo~ord=Wx8.)8')
        ]);
        User::create([
            'name' => "HBO-ICT",
            'email' => "elitehacker@hz.nl",
            'password' => Hash::make('z:=Ly:wy*4iXEssWzYU:pNZ@n}2oabe~')
        ]);
    }
}
