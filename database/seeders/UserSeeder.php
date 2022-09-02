<?php

namespace Database\Seeders;

use App\Models\User;

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
         // usuario con el rol super-admin        
        User::create([
        'name'     => 'George Galindez',
        'email'    => 'root@123.com',
        'password' => bcrypt('18262688')
        ]);

        // usuario con el rol admin
        User::create([
        'name'     => 'Admin',
        'email'    => 'admin@123.com',
        'password' => bcrypt('123456')
        ]);

        User::create([
        'name'     => 'Gerente',
        'email'    => 'gerente@123.com',
        'password' => bcrypt('123456')
        ]);

        User::create([
        'name'     => 'vendedor',
        'email'    => 'vendedor@123.com',
        'password' => bcrypt('123456')
        ]);
    }
}
