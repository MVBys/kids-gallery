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

        $started_at = time() - (random_int(-4,15) * 24 * 60 * 60) ;
        $end_registration_at = $started_at + (random_int(3,7) * 24 * 60 * 60);
        $completion_at = $end_registration_at + (random_int(3,7) * 24 * 60 * 60);
        $status = 3;
        if (time() < $started_at) $status = 0;  //регистарция конкурс еще не началась
        if (time() >= $started_at && time() < $end_registration_at) $status = 1; // конкурс в стадии регистарции работ участников
        if (time() >= $end_registration_at && time() < $completion_at) $status = 2; // конкурс в стадии головования
        if (time() > $completion_at) $status = 3; // конкурс завершен

        return [
            'user_id' => random_int(1,9),
            'title' => $this->faker->sentence(random_int(1,3)),
            'description' => $this->faker->paragraph(random_int(1,3)),
            'cover' => 'contests/cover'.$this->faker->randomDigitNotNull().'.jpg',
            'instruction' => 'instruction'.$this->faker->randomDigitNotNull().'.pdf',
            'status' => $status,
            'config' => 'json',
            'started_at' => date("Y-m-d H:i:s", $started_at ),
            'end_registration_at' => date("Y-m-d H:i:s", $end_registration_at ),
            'completion_at' => date("Y-m-d H:i:s", $completion_at ),
            'created_at' => date("Y-m-d H:i:s", $started_at),
            'updated_at' => date("Y-m-d H:i:s", $started_at),
        ];
    }
}
