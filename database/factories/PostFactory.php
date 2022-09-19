<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => fake()->title(),
            'content' => fake()->text(),
            'user_id' => User::inRandomOrder()->first()
        ];
    }
}
