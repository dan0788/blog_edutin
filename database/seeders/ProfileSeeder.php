<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Profile::create([
            'photo' => 'https://www.65ymas.com/consejos/mejores-fotos-este-verano-con-estos-trucos_30315_102.html',
            'id_users' => '1'
        ]); */

        Profile::factory(10)->create();
    }
}
