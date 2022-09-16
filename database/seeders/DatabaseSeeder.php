<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'first_name' => fake()->name(),
            'email' => fake()->email(),
            'last_name' => fake()->lastName(),
            'password' => fake()->password(),
            'company' => fake()->company(),
            'country' => fake()->country(),
        ]);
    }
}
