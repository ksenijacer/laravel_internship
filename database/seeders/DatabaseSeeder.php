<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Country;
use Database\Seeders\PostSeeder;
use Database\Seeders\CountriesSeeder;

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
        $this->call([
            PostSeeder::class, 
            CountriesSeeder::class]);
        $this->command->info('Seeded the countries!'); 

    }
}
