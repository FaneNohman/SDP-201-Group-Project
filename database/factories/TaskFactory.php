<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'task_name' => fake()->name(),
            'description' => fake()->text(),
            'deadline' => fake()->date('2023-04-2'),
            'user_id'=>1,
            'project_id'=>1,
        ];
    }
}
