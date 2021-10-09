<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition(): array
    {
        return [
            'body' => $this->faker->sentence,
            'is_completed' => $this->faker->boolean,
            'user_id' => User::factory()
        ];
    }
}
