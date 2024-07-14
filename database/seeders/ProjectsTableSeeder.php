<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('projects')->delete();
        
        \DB::table('projects')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'سایت شرکتی',
                'project_image' => 'projects\\July2024\\PQUQ9PDIMLbiZ9FR0pLs.jpg',
                'details' => 'سایت شرکتی',
                'description' => 'سایت شرکتی که با لاراول پیاده سازی شده است',
                'created_at' => '2023-12-07 08:49:00',
                'updated_at' => '2024-07-13 17:35:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'سایت شرکتی',
                'project_image' => 'projects\\July2024\\Sso7FIfKpZS8csoYOPiY.jpg',
                'details' => 'سایت شرکتی',
                'description' => 'سایت شرکت برهان مبین با استفاده از ناکست و لاراول پیاده سازی شده است',
                'created_at' => '2023-12-07 08:50:00',
                'updated_at' => '2024-07-13 17:34:53',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'سایت فروشگاهی بامبو',
                'project_image' => 'projects\\July2024\\NrkEgeT0z9WcVdycQVGS.jpg',
                'details' => 'سایت فروشگاهی',
                'description' => 'این سایت با استفاده از لاراول پیاده سازی شده است',
                'created_at' => '2023-12-07 08:53:00',
                'updated_at' => '2024-07-13 17:35:28',
            ),
        ));
        
        
    }
}