<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company(),
            'description'=>$this->faker->text(),
            'user_id' =>\App\Models\User::query()->inRandomOrder()->first()->getKey()
        ];
    }
}
