<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vignette>
 */
class VignetteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'Legende'=>fake()->word(),
                'Url'=>('https://cataas.com/cat'),
                'Description'=>fake()->paragraph(),
                'Statut'=>fake()->boolean(),
        ];
    }
}
