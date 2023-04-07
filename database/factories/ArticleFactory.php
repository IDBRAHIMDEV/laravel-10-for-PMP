<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence();
        $categoryIds = Category::pluck('id');
        $userIds = User::pluck('id');

        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'content' => fake()->paragraph(5),
            'image' => fake()->imageUrl(360, 360, 'animals', true, 'cats'),
            'category_id' => fake()->randomElement($categoryIds),
            'user_id' => fake()->randomElement($userIds),
            'published' => fake()->randomElement([0, 1])
        ];
    }
}
