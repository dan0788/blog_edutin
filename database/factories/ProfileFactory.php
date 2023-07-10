<?php

namespace Database\Factories;

use App\Models\User;
use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'photo' => Str::random(15),
            'id_users' => User::all()->random()->id
        ];
    }
}