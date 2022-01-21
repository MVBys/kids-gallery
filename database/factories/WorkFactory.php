<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $all_name = $this->faker->name();
        return [
            'contest_id' => random_int(1,20),
            'title' => $this->faker->sentence(random_int(1,3)),
            'file' => 'works/file'.$this->faker->randomDigitNotNull().'.jpg',
            'participant_name' => Str::before($all_name, ' '),
            'particapant_lastname' => Str::after($all_name, ' '),
            'sum_of_points' => random_int(100,500),
            'number_of_votes' => random_int(98,100),
            'like' => random_int(1,100),
            'dislike' => random_int(1,100),
            'created_at' => date("Y-m-d H:i:s", time() - (random_int(3,5) * 24 * 60 * 60) ),
            'updated_at' => date("Y-m-d H:i:s", time() - (random_int(3,5) * 24 * 60 * 60) ),
        ];
    }
}

