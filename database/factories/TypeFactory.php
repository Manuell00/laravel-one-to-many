<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type>
 */
class TypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_name' => fake()->randomElements([
                'Artificial_Intelligence', 'Front_End', 'Back_End', 'University', 'Middle_School', 'Python'
            ], 1),

            'description' => fake()->paragraph()
        ];
    }
}
