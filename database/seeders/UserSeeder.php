<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'full_name' => 'Daniel Ayala',
            'email' => 'danielayala@gmail.com',
            'password' => Hash::make('Daniel Ayala')
        ]);

        User::create([
            'full_name' => 'Naruto Uzumaki',
            'email' => 'narutouzumaki@gmail.com',
            'password' => Hash::make('Naruto Uzumaki')
        ]);

        User::create([
            'full_name' => 'Sasuke Uchiha',
            'email' => 'sasukeuchiha@gmail.com',
            'password' => Hash::make('Sasuke Uchiha')
        ]);

        User::create([
            'full_name' => 'Neji Hyuga',
            'email' => 'nejihyuga@gmail.com',
            'password' => Hash::make('Neji Hyuga')
        ]);

        User::factory(15)->create();
    }
}
