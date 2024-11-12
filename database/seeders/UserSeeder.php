<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    #-----------------------------#
    #   Run the database seeds.   #
    #-----------------------------#
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name'    => 'Kevin',
            'last_name'     => 'Quiroga',
            'age'           =>  21,
            'phone'         => '3014539076',
            'gander'        => 'Masculino',
            'address'       => 'Calle 80 #8B-10 Barrio Japones',
            'birth_date'    => '2003/07/23',
            'photo_profile' => null,
            'biography'     => null,
            'email'         => 'kevin@gmail.com',
            'password'      => bcrypt('kevin123'),
            'status_account'=> 1,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);
    }
}
