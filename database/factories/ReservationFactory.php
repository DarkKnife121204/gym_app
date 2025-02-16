<?php

namespace Database\Factories;

use App\Models\Hall;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'=> User::inRandomOrder()->first()->id,
            'hall_id'=> Hall::inRandomOrder()->first()->id,
            'rented_at'=> fake()->dateTimeInInterval( '-1 days'),
            'due_date'=> fake()->dateTimeInInterval( '+1 days'),
        ];
    }
}
