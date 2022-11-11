<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

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
        $user->name = 'Jonathan';
        $user->lastname = 'Soto';
        $user->email = 'jsoto@uabcs.mx';
        $user->password = bcrypt('password'); 
        $user->save();

        $user = new User(); 
        $user->name = 'Edgar';
        $user->lastname = 'Alvarez';
        $user->email = 'edgar@alu.uabcs.mx';
        $user->password = bcrypt('password1'); 
        $user->save();
    }
}







