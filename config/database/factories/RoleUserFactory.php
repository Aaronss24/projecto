<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>\App\Models\User::query()->inRandomOrder()->first()->getKey(),
            'role_id' =>\App\Models\Roles::query()->inRandomOrder()->first()->getKey()
        ];
    }
}
