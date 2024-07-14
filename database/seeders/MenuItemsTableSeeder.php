<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2024-07-13 20:55:03',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2024-07-13 20:55:03',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2024-07-13 20:55:03',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2024-07-13 17:25:04',
                'route' => NULL,
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-12-08 09:46:24',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-12-08 09:46:24',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-12-08 09:46:24',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2023-12-08 09:46:24',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 11,
                'created_at' => '2023-11-11 06:54:32',
                'updated_at' => '2024-07-13 17:25:04',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Skills',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-barbell',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2023-11-11 08:27:56',
                'updated_at' => '2024-07-13 20:55:01',
                'route' => 'voyager.skills.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Projects',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-new',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2023-11-11 08:28:49',
                'updated_at' => '2024-07-13 20:55:01',
                'route' => 'voyager.projects.index',
                'parameters' => 'null',
            ),
            11 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Contacts',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2023-11-11 08:29:50',
                'updated_at' => '2024-07-13 20:55:01',
                'route' => 'voyager.contacts.index',
                'parameters' => 'null',
            ),
            12 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Resumes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2023-12-08 09:42:57',
                'updated_at' => '2024-07-13 20:55:01',
                'route' => 'voyager.resumes.index',
                'parameters' => 'null',
            ),
            13 => 
            array (
                'id' => 24,
                'menu_id' => 1,
                'title' => 'Education',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-logbook',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2024-07-13 17:24:56',
                'updated_at' => '2024-07-13 20:55:01',
                'route' => 'voyager.education.index',
                'parameters' => 'null',
            ),
            14 => 
            array (
                'id' => 25,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-dashboard',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2024-07-13 20:54:43',
                'updated_at' => '2024-07-14 06:08:17',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
        ));
        
        
    }
}