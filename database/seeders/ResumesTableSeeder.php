<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ResumesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('resumes')->delete();
        
        \DB::table('resumes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'fullname' => 'Shahrokh ghorbani',
                'fullname_fa' => 'شاهرخ قربانی نژاد',
                'age' => '19',
                'email' => 'shahrokhdev2003@gmail.com',
                'address' => 'Iran Birjand',
                'address_fa' => 'ایران - بیرجند',
                'freelance' => 'available',
                'freelance_fa' => 'دردسترس',
                'skills' => 'fullstack developer',
                'skills_fa' => 'توسعه دهنده فول استک',
                'experience' => '3 years',
                'experience_fa' => '3 سال',
                'languages' => 'english , persian',
                'languages_fa' => 'انگلیسی و فارسی',
                'happy_clients' => 10,
                'project_completed' => 15,
                'awards_won' => 10,
                'created_at' => '2023-12-08 10:38:00',
                'updated_at' => '2023-12-08 11:04:54',
            ),
        ));
        
        
    }
}