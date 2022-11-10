<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name='Suzett';
        $user->lastname='Lavi';
        $user->email='suzett@gmail.com';
        $user->password=bcrypt('password');

        $user->save();

        $user = new User();
        $user->name='Suzett';
        $user->lastname='Lavi';
        $user->email='suzett@gmail.com';
        $user->password= bcrypt('password');
        $user->save();
    }
}

