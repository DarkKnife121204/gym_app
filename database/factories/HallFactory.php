<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HallFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address'=>fake()->address(),
            'description'=>fake()->text(300),
        ];
    }
}
