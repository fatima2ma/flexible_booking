<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'body'  => $this->faker->paragraph,
            'user_id' => \App\Models\UserProfile::factory(),
        ];
    }
}
