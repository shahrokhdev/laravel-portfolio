<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skills')->delete();
        
        \DB::table('skills')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'HTML',
                'slug' => 'html',
                'icon' => 'skills\\December2023\\LOnaHPC8tULD6oxT3GcW.png',
                'created_at' => '2023-12-06 10:00:00',
                'updated_at' => '2023-12-07 09:01:11',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'CSS',
                'slug' => 'css',
                'icon' => 'skills\\December2023\\ahK3Hm2QSSzRTOKO4ajN.png',
                'created_at' => '2023-12-06 10:01:23',
                'updated_at' => '2023-12-06 10:01:23',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'SASS',
                'slug' => 'sass',
                'icon' => 'skills\\December2023\\49dGCpwAicW7EOtoFsiE.png',
                'created_at' => '2023-12-06 10:01:51',
                'updated_at' => '2023-12-06 10:01:51',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'BOOTSTRAP',
                'slug' => 'bootstrap',
                'icon' => 'skills\\December2023\\Q7VDARnem8C9o0vp9qnu.png',
                'created_at' => '2023-12-06 10:04:00',
                'updated_at' => '2023-12-07 09:01:52',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'JAVASCRIPT',
                'slug' => 'javascript',
                'icon' => 'skills\\December2023\\AHoyJlyw6MZAfqv50Jba.png',
                'created_at' => '2023-12-06 10:05:13',
                'updated_at' => '2023-12-06 10:05:13',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'VUEJS',
                'slug' => 'vuejs',
                'icon' => 'skills\\December2023\\Q36fGxGOxSd91KZjTESM.png',
                'created_at' => '2023-12-06 10:05:39',
                'updated_at' => '2023-12-06 10:05:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'PHP',
                'slug' => 'php',
                'icon' => 'skills\\December2023\\dQ2722YB9YdfsxLk1IBG.png',
                'created_at' => '2023-12-06 10:05:49',
                'updated_at' => '2023-12-06 10:05:49',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'LARAVEL',
                'slug' => 'laravel',
                'icon' => 'skills\\December2023\\AZVOT8mNO6lFUDmIO16R.jpg',
                'created_at' => '2023-12-06 10:06:21',
                'updated_at' => '2023-12-06 10:06:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'GIT',
                'slug' => 'git',
                'icon' => 'skills\\December2023\\SOa8GuQFQ92GHY6izbq9.png',
                'created_at' => '2023-12-06 10:08:00',
                'updated_at' => '2023-12-07 09:05:04',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Graphql',
                'slug' => 'graphql',
                'icon' => 'skills\\July2024\\cWac6GZso7glwH1gjLv3.png',
                'created_at' => '2024-07-13 10:20:36',
                'updated_at' => '2024-07-13 10:20:36',
            ),
        ));
        
        
    }
}