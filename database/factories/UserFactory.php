<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name'=>$this->faker->name(),
            'email'=>$this->faker->safeEmail(),
            'password'=>$this->faker->password(),
            'remember_token'=>Str::random(100)
        ];
    }
}
