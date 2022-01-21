<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1,9),
            'title' => $this->faker->sentence(random_int(1,3)),
            'description' => $this->faker->paragraph(random_int(1,3)),
            'cover' => 'contests/cover'.$this->faker->randomDigitNotNull().'.jpg',
            'instruction' => 'instruction'.$this->faker->randomDigitNotNull().'.pdf',
            'status' => random_int(1,3),
            'confirm' => random_int(0,1),
            'config' => 'json',
            'started_at' => date("Y-m-d H:i:s", time() - (random_int(6,9) * 24 * 60 * 60) ),
            'end_registration_at' => date("Y-m-d H:i:s", time() - (random_int(3,5) * 24 * 60 * 60) ),
            'completion_at' => date("Y-m-d H:i:s", time() - (random_int(-3,2) * 24 * 60 * 60) ),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

        ];
    }
}
