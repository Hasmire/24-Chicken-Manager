<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Food;
use App\Models\order_type;
use App\Models\Promo;
use Illuminate\Support\Facades\Hash;

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
        User::create([ //SAMPLE admin
            'firstname' => 'John',
            'lastname' => 'Doe',
            'address' => '123 Grove Street',
            'email' => 'admin@chicken.com',
            'password' =>  'password'
        ]);

        User::create([ //SAMPLE employee
            'firstname' => 'Sally',
            'lastname' => 'Smith',
            'address' => '123 Grove Street',
            'email' => 'employee@chicken.com',
            'password' =>  'password'
        ]);

        User::factory(13)->create();

        // Create employees from first 5 users
        Employee::create([
            'user_id' => 1,
            'ismanager' => true,
        ]);

        Employee::create([
            'user_id' => 2,
        ]);

        Employee::create([
            'user_id' => 3,
        ]);

        Employee::create([
            'user_id' => 4,
        ]);

        Employee::create([
            'user_id' => 5,
        ]);

        // Create initial food values
        Food::create([
            'name' => 'Original',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Lemon Glazed',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Garlic',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Jack Daniels',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Yangnyeom',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Yangnyeom x2',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Yangnyeom w/ Garlic',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Spicy BBQ',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => 'Snow Cheese',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        Food::create([
            'name' => '24 Cheddar',
            'description' => fake()->paragraph(8),
            'amount' => 125,
            'thumbnail' => '/images/24chicken-item-sample.jpg',
        ]);

        // Create initial promo values
        Promo::create([
            'name' => '20PESOS',
            'amount' => 20,
        ]);

        Promo::create([
            'name' => '30PESOS',
            'amount' => 30,
        ]);

        Promo::create([
            'name' => '50PESOS',
            'amount' => 50,
        ]);

        // Create initial order type values
        Order_type::create([
            'name' => 'Dine-in',
            'amount' => 10,

        ]);

        Order_type::create([
            'name' => 'Take-out',
            'amount' => 15,
        ]);

        Order_type::create([
            'name' => 'Delivery',
            'amount' => 70,
        ]);
    }
}
