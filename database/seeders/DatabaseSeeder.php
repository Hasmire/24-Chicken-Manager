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
        // Create fake Users
        User::factory(15)->create();

        // Create employees from first 5 users
        DB::table('employees')->insert([
            'user_id' => 1,
            'ismanager' => true
        ]);

        DB::table('employees')->insert([
            'user_id' => 2
        ]);

        DB::table('employees')->insert([
            'user_id' => 3
        ]);

        DB::table('employees')->insert([
            'user_id' => 4
        ]);

        DB::table('employees')->insert([
            'user_id' => 5
        ]);

        // Create initial food values
        DB::table('foods')->insert([
            'name' => 'Original',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg'
        ]);
        DB::table('foods')->insert([
            'name' => 'Jack Daniels',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg'
        ]);
        DB::table('foods')->insert([
            'name' => 'Garlic',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg'
        ]);
        DB::table('foods')->insert([
            'name' => 'Yangnyeom',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg'
        ]);

        // Create initial promo values
        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat()
        ]);

        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat()
        ]);

        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat()
        ]);

        // Create initial order type values
        DB::table('order_types')->insert([
            'name' => 'dine-in',
            'amount' => 10
        ]);

        DB::table('order_types')->insert([
            'name' => 'take-out',
            'amount' => 20
        ]);

        DB::table('order_types')->insert([
            'name' => 'delivery',
            'amount' => 70
        ]);
    }
}
