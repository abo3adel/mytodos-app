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
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'easy',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'needs help',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
        ));
        
        
    }
}