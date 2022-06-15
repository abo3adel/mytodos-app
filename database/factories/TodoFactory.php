<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'user_id' => User::factory(),
            'category_id' => fn() => Category::factory(),
            // 'slug' => $this->faker->slug,
            'body' => $this->faker->sentence,
            'done' => $this->faker->boolean,
        ];
    }
}
