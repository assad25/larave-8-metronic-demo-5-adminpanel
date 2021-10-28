<?php

namespace Database\Seeders;

use App\HelperFunction\Status;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        $users = [
            [
                'name' => 'Admin',
                'email' =>  'admin@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'status' => Status::Active,
            ],
            [
                'name' => 'Assad Yaqoob',
                'email' =>  'assad@example.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'status' => Status::Active,
            ],
        ];

        foreach ($users as $key => $user){
            if ($key == 0){
                $admin = User::create($user);
                $admin->assignRole('admin');
            }else{
                $user = User::create($user);
                $user->assignRole('user');
            }
        }
    }
}
