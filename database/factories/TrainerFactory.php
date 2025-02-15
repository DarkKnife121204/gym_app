<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrainerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'=>fake()->name,
            'surname'=>fake()->firstName,
            'experience'=>fake()->internetExplorer,
            'speciality'=>fake()
        ];
    }
}
