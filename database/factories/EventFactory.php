<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition()
    {
        return [
            'image' => 'https://loremflickr.com/680/480/cat?random=10',
            'title' => $this->faker->sentence(2),
            'date' => $this->faker->dateTimeBetween('+0 days', '+2 years'),
            'hour' => $this->faker->time($format = 'H:00'),
            'duration' => $this->faker->randomElement(['3 días', '5 días', '8 días', '10 días', '20 días']),
            'max_participants' => $this->faker->numberBetween(25, 30),
            'min_participants' => $this->faker->numberBetween(2, 25),
            'price' => $this->faker->randomFloat($maxDecimals = 2, $min = 100, $max = 500),
            'description' => $this->faker->text(240),
            'Included' => $this->faker->text(200),
        ];
    }
}

// {$this->faker->unique()->numberBetween(1, $this->count)}
