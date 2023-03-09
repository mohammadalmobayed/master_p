<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>now(),
            'phone'=>'0798848899',
            'User_image'=>'profile_pic.png',
            'password'=> bcrypt('12345678'),
            'role'=>'superadmin',
            'deleted_at'=>null,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}