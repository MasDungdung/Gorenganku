<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\User;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
            'name'      => 'Administrator',
            'username'  => 'admin', 
            'email'     => 'admin@gorenganku.com',
            'password'  =>  bcrypt('admin'),
            'level'     => 'admin'
            ],
            [
            'name'      => 'Manager',
            'username'  => 'manager', 
            'email'     => 'manager@gorenganku.com',
            'password'  =>  bcrypt('manager'),
            'level'     => 'manager'
            ],
        ];
            foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
