<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 7,
                'name' => 'gqegqg',
                'phoneNumber' => '09903478085',
                'email' => 'qegeqg@gmail.com',
                'subject' => 'qegqeg',
                'message' => '09903478085',
                'created_at' => '2024-07-13 17:46:45',
                'updated_at' => '2024-07-13 17:46:45',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'qeggeqgq',
                'phoneNumber' => '25251235611',
                'email' => 'abbas@gmail.com',
                'subject' => 'qergqeghqe',
                'message' => '25251235611',
                'created_at' => '2024-07-13 17:47:22',
                'updated_at' => '2024-07-13 17:47:22',
            ),
            2 => 
            array (
                'id' => 9,
                'name' => 'rwhwrhwrh',
                'phoneNumber' => '09903478085',
                'email' => 'shahrokh@gmail.com',
                'subject' => 'eqgqeg',
                'message' => '09903478085',
                'created_at' => '2024-07-13 22:15:00',
                'updated_at' => '2024-07-13 22:15:00',
            ),
        ));
        
        
    }
}