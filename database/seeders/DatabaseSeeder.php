<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CHANGE ALL OF THIS LATER TO ELOQUENCE OBJECT CREATE
        // DELETE CARBON AFTER CHANGING TO ELOQUENCE
        // Create fake Users
        User::factory(15)->create();

        // Create employees from first 5 users
        DB::table('employees')->insert([
            'user_id' => 1,
            'ismanager' => true,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'user_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'user_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'user_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('employees')->insert([
            'user_id' => 5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // Create initial food values
        DB::table('foods')->insert([
            'name' => 'Original',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('foods')->insert([
            'name' => 'Jack Daniels',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('foods')->insert([
            'name' => 'Garlic',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('foods')->insert([
            'name' => 'Yangnyeom',
            'description' => fake()->sentence(),
            'amount' => 125,
            'thumbnail' => '/images/placeholder.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // Create initial promo values
        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('promos')->insert([
            'name' => fake()->unique()->word(),
            'amount' => fake()->randomFloat(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        // Create initial order type values
        DB::table('order_types')->insert([
            'name' => 'dine-in',
            'amount' => 10,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('order_types')->insert([
            'name' => 'take-out',
            'amount' => 20,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('order_types')->insert([
            'name' => 'delivery',
            'amount' => 70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
