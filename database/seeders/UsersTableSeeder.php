<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'shahrokh',
                'email' => 'admin@gmail.com',
                'avatar' => 'users\\July2024\\isHoC97Q7K4EGfiR3whM.jpg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yNmZkgPPbPo0p0xtOyFUHePnzzC5CvAJjPGKnErZmARJlCHERHffu',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2023-12-04 09:48:12',
                'updated_at' => '2024-07-13 22:06:59',
            ),
        ));
        
        
    }
}