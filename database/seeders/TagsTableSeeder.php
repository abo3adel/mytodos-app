<?php

namespace Database\Seeders;

use DB;
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
                'title' => 'urgent',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            1 => 
            array (
                'title' => 'easy',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            2 => 
            array (
                'title' => 'needs help',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
        ));
        
        $a = DB::statement("SELECT setval(pg_get_serial_sequence('tags', 'id'), coalesce(max(id),0) + 1, false) FROM tags;");
        // dd($a);
    }
}