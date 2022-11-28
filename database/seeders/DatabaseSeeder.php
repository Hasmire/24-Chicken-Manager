<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create fake Users
        User::factory(5)->create();

        //Create initial food values
        DB::table('foods')->insert([
            'name' => 'Original',
            'description' => fake()->sentence(),
            'price' => 125,
            'thumbnail'=> fake()->sentence()
        ]);
        DB::table('foods')->insert([
            'name' => 'Jack Daniels',
            'description' => fake()->sentence(),
            'price' => 125,
            'thumbnail'=> fake()->sentence()
        ]);
        DB::table('foods')->insert([
            'name' => 'Garlic',
            'description' => fake()->sentence(),
            'price' => 125,
            'thumbnail'=> fake()->sentence()
        ]);
        DB::table('foods')->insert([
            'name' => 'Yangnyeom',
            'description' => fake()->sentence(),
            'price' => 125,
            'thumbnail'=> fake()->sentence()
        ]);     
           
    }
}
