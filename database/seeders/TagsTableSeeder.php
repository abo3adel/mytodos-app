<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'urgent',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'easy',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'needs help',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'est ab',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'totam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'totam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'quidem',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            8 => 
            array (
                'id' => 9,
                'title' => 'corporis aut',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            9 => 
            array (
                'id' => 10,
                'title' => 'et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            10 => 
            array (
                'id' => 11,
                'title' => 'voluptas',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            11 => 
            array (
                'id' => 12,
                'title' => 'labore earum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            12 => 
            array (
                'id' => 13,
                'title' => 'dolorum ipsa',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            13 => 
            array (
                'id' => 14,
                'title' => 'ipsam nostrum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            14 => 
            array (
                'id' => 15,
                'title' => 'officia',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            15 => 
            array (
                'id' => 16,
                'title' => 'ea',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            16 => 
            array (
                'id' => 17,
                'title' => 'in',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            17 => 
            array (
                'id' => 18,
                'title' => 'iure',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            18 => 
            array (
                'id' => 19,
                'title' => 'eveniet',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            19 => 
            array (
                'id' => 20,
                'title' => 'velit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            20 => 
            array (
                'id' => 21,
                'title' => 'aspernatur excepturi',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            21 => 
            array (
                'id' => 22,
                'title' => 'non',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            22 => 
            array (
                'id' => 23,
                'title' => 'perspiciatis totam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            23 => 
            array (
                'id' => 24,
                'title' => 'aliquam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            24 => 
            array (
                'id' => 25,
                'title' => 'assumenda praesentium',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            25 => 
            array (
                'id' => 26,
                'title' => 'quis',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
        ));
        
        
    }
}