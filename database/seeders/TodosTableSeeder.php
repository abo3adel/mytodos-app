<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('todos')->delete();
        
        \DB::table('todos')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'body' => 'Ut voluptatem omnis ut voluptatem.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            1 => 
            array (
                'category_id' => 1,
                'body' => 'Et nihil architecto ea et et.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            2 => 
            array (
                'category_id' => 1,
                'body' => 'Neque officiis rerum rerum sit inventore provident id.',
                'done' => 1,
                'user_tag' => 'rem',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            3 => 
            array (
                'category_id' => 1,
                'body' => 'Veniam debitis eligendi laudantium quia et optio eligendi.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            4 => 
            array (
                'category_id' => 1,
                'body' => 'Omnis aliquid amet quasi incidunt numquam.',
                'done' => 1,
                'user_tag' => 'voluptate',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            5 => 
            array (
                'category_id' => 1,
                'body' => 'Architecto neque aut nam sit dicta aliquam.',
                'done' => 0,
                'user_tag' => 'commodi',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            6 => 
            array (
                'category_id' => 1,
                'body' => 'Eos facere et id sed enim.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            7 => 
            array (
                'category_id' => 2,
                'body' => 'Expedita at facere repellat placeat.',
                'done' => 0,
                'user_tag' => 'ducimus',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            8 => 
            array (
                'category_id' => 2,
                'body' => 'Reiciendis eveniet corporis ipsam in.',
                'done' => 0,
                'user_tag' => 'voluptas',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            9 => 
            array (
                'category_id' => 2,
                'body' => 'Delectus ea fugiat occaecati fugiat.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            10 => 
            array (
                'category_id' => 2,
                'body' => 'Dolorem id temporibus magnam eum aliquid.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            11 => 
            array (
                'category_id' => 2,
                'body' => 'Velit nihil ab ea fuga a voluptas reiciendis.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            12 => 
            array (
                'category_id' => 2,
                'body' => 'Quas autem libero et accusantium.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            13 => 
            array (
                'category_id' => 2,
                'body' => 'Est aut eos quos.',
                'done' => 1,
                'user_tag' => 'aliquid',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            14 => 
            array (
                'category_id' => 2,
                'body' => 'Corporis sint ut reprehenderit omnis a voluptatibus.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            15 => 
            array (
                'category_id' => 3,
                'body' => 'Ex nihil veritatis et est.',
                'done' => 1,
                'user_tag' => 'et',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            16 => 
            array (
                'category_id' => 3,
                'body' => 'Iste corporis deleniti dolores voluptas non iste consequatur incidunt.',
                'done' => 0,
                'user_tag' => 'quia',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            17 => 
            array (
                'category_id' => 3,
                'body' => 'Atque maiores harum quia et inventore facilis exercitationem.',
                'done' => 0,
                'user_tag' => 'veritatis',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            18 => 
            array (
                'category_id' => 3,
                'body' => 'Quo corrupti et ratione est eos est.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            19 => 
            array (
                'category_id' => 3,
                'body' => 'Repellendus est ullam aut.',
                'done' => 0,
                'user_tag' => 'vel',
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            20 => 
            array (
                'category_id' => 3,
                'body' => 'Molestias sit perferendis ab.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:42',
                'updated_at' => '2022-06-19 22:59:42',
            ),
            21 => 
            array (
                'category_id' => 4,
                'body' => 'Nemo pariatur impedit dolores eos qui.',
                'done' => 0,
                'user_tag' => 'id',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            22 => 
            array (
                'category_id' => 4,
                'body' => 'Atque fugit dignissimos cupiditate magnam qui nisi distinctio ad.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            23 => 
            array (
                'category_id' => 4,
                'body' => 'Doloribus et nulla dolor aut.',
                'done' => 1,
                'user_tag' => 'enim',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            24 => 
            array (
                'category_id' => 4,
                'body' => 'Architecto et et ducimus ad.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            25 => 
            array (
                'category_id' => 4,
                'body' => 'Rerum odio numquam sint possimus vel veritatis.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            26 => 
            array (
                'category_id' => 4,
                'body' => 'Non accusamus architecto quo nihil consequatur et ipsum.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            27 => 
            array (
                'category_id' => 4,
                'body' => 'Quia iusto dolor deleniti.',
                'done' => 1,
                'user_tag' => 'et',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            28 => 
            array (
                'category_id' => 4,
                'body' => 'Quod voluptatem placeat iure provident vitae iure illo.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            29 => 
            array (
                'category_id' => 4,
                'body' => 'Eaque temporibus voluptas in aut deleniti.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            30 => 
            array (
                'category_id' => 5,
                'body' => 'Repudiandae hic consequuntur ipsam aut.',
                'done' => 1,
                'user_tag' => 'aliquam',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            31 => 
            array (
                'category_id' => 5,
                'body' => 'Culpa repellat culpa voluptatibus.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            32 => 
            array (
                'category_id' => 5,
                'body' => 'Tempore nobis beatae et laudantium.',
                'done' => 0,
                'user_tag' => 'placeat',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            33 => 
            array (
                'category_id' => 5,
                'body' => 'Facere illo fuga alias voluptate.',
                'done' => 1,
                'user_tag' => 'quia',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            34 => 
            array (
                'category_id' => 5,
                'body' => 'Omnis ipsam neque minus ullam ipsum maxime.',
                'done' => 1,
                'user_tag' => 'voluptatem',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
            35 => 
            array (
                'category_id' => 5,
                'body' => 'Totam fuga sit voluptas aut dolor ullam suscipit.',
                'done' => 1,
                'user_tag' => 'laudantium',
                'created_at' => '2022-06-19 22:59:43',
                'updated_at' => '2022-06-19 22:59:43',
            ),
        ));
        
        
    }
}