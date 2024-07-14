<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            25 => 
            array (
                'id' => 41,
                'key' => 'browse_skills',
                'table_name' => 'skills',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-11-11 08:27:56',
            ),
            26 => 
            array (
                'id' => 42,
                'key' => 'read_skills',
                'table_name' => 'skills',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-11-11 08:27:56',
            ),
            27 => 
            array (
                'id' => 43,
                'key' => 'edit_skills',
                'table_name' => 'skills',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-11-11 08:27:56',
            ),
            28 => 
            array (
                'id' => 44,
                'key' => 'add_skills',
                'table_name' => 'skills',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-11-11 08:27:56',
            ),
            29 => 
            array (
                'id' => 45,
                'key' => 'delete_skills',
                'table_name' => 'skills',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-11-11 08:27:56',
            ),
            30 => 
            array (
                'id' => 46,
                'key' => 'browse_projects',
                'table_name' => 'projects',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-11-11 08:28:49',
            ),
            31 => 
            array (
                'id' => 47,
                'key' => 'read_projects',
                'table_name' => 'projects',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-11-11 08:28:49',
            ),
            32 => 
            array (
                'id' => 48,
                'key' => 'edit_projects',
                'table_name' => 'projects',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-11-11 08:28:49',
            ),
            33 => 
            array (
                'id' => 49,
                'key' => 'add_projects',
                'table_name' => 'projects',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-11-11 08:28:49',
            ),
            34 => 
            array (
                'id' => 50,
                'key' => 'delete_projects',
                'table_name' => 'projects',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-11-11 08:28:49',
            ),
            35 => 
            array (
                'id' => 51,
                'key' => 'browse_contacts',
                'table_name' => 'contacts',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            36 => 
            array (
                'id' => 52,
                'key' => 'read_contacts',
                'table_name' => 'contacts',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            37 => 
            array (
                'id' => 53,
                'key' => 'edit_contacts',
                'table_name' => 'contacts',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            38 => 
            array (
                'id' => 54,
                'key' => 'add_contacts',
                'table_name' => 'contacts',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            39 => 
            array (
                'id' => 55,
                'key' => 'delete_contacts',
                'table_name' => 'contacts',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            40 => 
            array (
                'id' => 76,
                'key' => 'browse_resumes',
                'table_name' => 'resumes',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 09:42:57',
            ),
            41 => 
            array (
                'id' => 77,
                'key' => 'read_resumes',
                'table_name' => 'resumes',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 09:42:57',
            ),
            42 => 
            array (
                'id' => 78,
                'key' => 'edit_resumes',
                'table_name' => 'resumes',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 09:42:57',
            ),
            43 => 
            array (
                'id' => 79,
                'key' => 'add_resumes',
                'table_name' => 'resumes',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 09:42:57',
            ),
            44 => 
            array (
                'id' => 80,
                'key' => 'delete_resumes',
                'table_name' => 'resumes',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 09:42:57',
            ),
            45 => 
            array (
                'id' => 81,
                'key' => 'browse_education',
                'table_name' => 'education',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2023-12-08 09:45:10',
            ),
            46 => 
            array (
                'id' => 82,
                'key' => 'read_education',
                'table_name' => 'education',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2023-12-08 09:45:10',
            ),
            47 => 
            array (
                'id' => 83,
                'key' => 'edit_education',
                'table_name' => 'education',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2023-12-08 09:45:10',
            ),
            48 => 
            array (
                'id' => 84,
                'key' => 'add_education',
                'table_name' => 'education',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2023-12-08 09:45:10',
            ),
            49 => 
            array (
                'id' => 85,
                'key' => 'delete_education',
                'table_name' => 'education',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2023-12-08 09:45:10',
            ),
        ));
        
        
    }
}