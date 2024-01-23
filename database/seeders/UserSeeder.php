<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{

    public function run()
    {
        $user = new User([
            'number_id' => '1114238109',
            'name' => 'Angelo',
            'last_name' => 'Estrada',
            'email' => 'lucumiangelo123@gmail.com',
            'password' => bcrypt(123456789),
            'remember_token' => Str::random(10),
        ]);

        $user->save();
    }
}
