<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-11-11 06:54:32',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'skills',
                'slug' => 'skills',
                'display_name_singular' => 'Skill',
                'display_name_plural' => 'Skills',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Skill',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2023-12-06 09:56:34',
            ),
            4 => 
            array (
                'id' => 8,
                'name' => 'projects',
                'slug' => 'projects',
                'display_name_singular' => 'Project',
                'display_name_plural' => 'Projects',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Project',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2023-12-06 18:12:37',
            ),
            5 => 
            array (
                'id' => 9,
                'name' => 'contacts',
                'slug' => 'contacts',
                'display_name_singular' => 'Contact',
                'display_name_plural' => 'Contacts',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Contact',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2023-11-11 08:29:50',
            ),
            6 => 
            array (
                'id' => 17,
                'name' => 'resumes',
                'slug' => 'resumes',
                'display_name_singular' => 'Resume',
                'display_name_plural' => 'Resumes',
                'icon' => NULL,
                'model_name' => 'App\\Models\\Resume',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2023-12-08 11:57:50',
            ),
            7 => 
            array (
                'id' => 18,
                'name' => 'education',
                'slug' => 'education',
                'display_name_singular' => 'Education',
                'display_name_plural' => 'Education',
                'icon' => 'voyager-boat',
                'model_name' => 'App\\Models\\Education',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-12-08 09:45:10',
                'updated_at' => '2024-07-13 17:22:49',
            ),
        ));
        
        
    }
}