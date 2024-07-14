<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('education')->delete();
        
        \DB::table('education')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'front-End developer',
                'title_fa' => 'توسعه دهنده فرانت سایت',
                'description' => 'i started to learn Front-End with HTML,CSS,BOOTSTRAP and VUEJS',
                'description_fa' => 'من شروع به یادگیری زبان هایی مانند HTML , CSS , BOOTSTRAP , JS , VUEJS  کردم.',
                'start_date' => '2019',
                'end_date' => '2022',
                'created_at' => '2023-12-08 10:34:00',
                'updated_at' => '2023-12-08 11:59:13',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'back-End developer',
                'title_fa' => 'توسعه دهنده بکند سایت',
                'description' => 'i also started to learn back-End with PHP and another requirements like OOP , and MVC and LARAVEL',
                'description_fa' => 'همچنین برای بکند زبان PHP , OOP , و همچنین LARAVEL را فرا گرفته ام',
                'start_date' => '2021',
                'end_date' => '2023',
                'created_at' => '2023-12-08 10:35:00',
                'updated_at' => '2023-12-08 11:59:00',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'API',
                'title_fa' => 'API',
            'description' => 'ability of use diffrenet API\'s  (Axios and Graphql)',
            'description_fa' => 'توانایی کار با api (Axios  و Graphql)',
                'start_date' => '2019',
                'end_date' => 'now',
                'created_at' => '2023-12-08 10:36:00',
                'updated_at' => '2024-07-13 17:28:48',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Teaching Programming',
                'title_fa' => 'تدریس برنامه نویسی',
                'description' => 'Teaching Assistant  of JavaScript and PHP in university and high school',
                'description_fa' => 'سابقه تدریس زبان های جاوا اسکریپت و پی اچ پی در دانشگاه و هنرستان به عنوان کمک استاد',
                'start_date' => '2022',
                'end_date' => '2023',
                'created_at' => '2023-12-08 10:37:00',
                'updated_at' => '2024-07-13 17:29:25',
            ),
        ));
        
        
    }
}