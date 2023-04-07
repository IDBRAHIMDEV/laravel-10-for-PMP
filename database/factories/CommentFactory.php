<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $articleIds = Article::pluck('id');
        $userIds = User::pluck('id');

        return [
            'content' => fake()->paragraph(2),
            'active' => fake()->randomElement([0, 1]),
            'article_id' => fake()->randomElement($articleIds),
            'user_id' => fake()->randomElement($userIds)
        ];
    }
}
