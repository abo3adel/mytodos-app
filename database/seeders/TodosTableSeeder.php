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
                'id' => 1,
                'category_id' => 1,
                'body' => 'Neque doloremque itaque dignissimos nesciunt eos ad itaque.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'body' => 'Facilis qui nisi sunt ea.',
                'done' => 0,
                'user_tag' => 'saepe',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 1,
                'body' => 'Inventore ut reiciendis qui dicta quae quia recusandae.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 1,
                'body' => 'Expedita rerum libero molestiae.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 1,
                'body' => 'Accusamus nisi aut molestias quas beatae labore cumque.',
                'done' => 1,
                'user_tag' => 'repudiandae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 1,
                'body' => 'Enim adipisci officia voluptas aut mollitia vero culpa.',
                'done' => 1,
                'user_tag' => 'deserunt',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 1,
                'body' => 'Mollitia dolor mollitia aut impedit.',
                'done' => 1,
                'user_tag' => 'assumenda',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 1,
                'body' => 'Nostrum et quasi qui expedita voluptatum aut dolor.',
                'done' => 1,
                'user_tag' => 'tenetur',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 1,
                'body' => 'Sint ipsa reiciendis tempora ipsum.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 1,
                'body' => 'Quaerat exercitationem qui ea ipsa.',
                'done' => 1,
                'user_tag' => 'vitae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 1,
                'body' => 'Suscipit expedita fuga non est explicabo minima cumque nihil.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 1,
                'body' => 'Sint officia doloribus suscipit omnis quas animi consequatur.',
                'done' => 1,
                'user_tag' => 'nihil',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            12 => 
            array (
                'id' => 13,
                'category_id' => 1,
                'body' => 'Quo ut qui et et est temporibus.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            13 => 
            array (
                'id' => 14,
                'category_id' => 2,
                'body' => 'Saepe rerum sint architecto ut maxime.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            14 => 
            array (
                'id' => 15,
                'category_id' => 2,
                'body' => 'Deleniti itaque voluptas qui quaerat.',
                'done' => 1,
                'user_tag' => 'sit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            15 => 
            array (
                'id' => 16,
                'category_id' => 2,
                'body' => 'Aspernatur veritatis occaecati esse ad qui atque.',
                'done' => 1,
                'user_tag' => 'voluptas',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            16 => 
            array (
                'id' => 17,
                'category_id' => 2,
                'body' => 'Blanditiis inventore molestiae consequatur est aut et.',
                'done' => 0,
                'user_tag' => 'nihil',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            17 => 
            array (
                'id' => 18,
                'category_id' => 2,
                'body' => 'Sint sequi magnam et sunt qui.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            18 => 
            array (
                'id' => 19,
                'category_id' => 3,
                'body' => 'Eligendi architecto quod et.',
                'done' => 1,
                'user_tag' => 'nulla',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            19 => 
            array (
                'id' => 20,
                'category_id' => 3,
                'body' => 'Minus et necessitatibus quae.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            20 => 
            array (
                'id' => 21,
                'category_id' => 3,
                'body' => 'Sit eum ducimus itaque laudantium unde sint sapiente.',
                'done' => 0,
                'user_tag' => 'omnis',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            21 => 
            array (
                'id' => 22,
                'category_id' => 3,
                'body' => 'Earum quisquam voluptatum rem dolor ea.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            22 => 
            array (
                'id' => 23,
                'category_id' => 3,
                'body' => 'Sequi reiciendis sequi aut iure quidem id consequatur dolor.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            23 => 
            array (
                'id' => 24,
                'category_id' => 3,
                'body' => 'Qui sit odit officiis et cupiditate.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            24 => 
            array (
                'id' => 25,
                'category_id' => 3,
                'body' => 'Qui quia nostrum voluptas voluptatem error voluptatem magni.',
                'done' => 0,
                'user_tag' => 'qui',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            25 => 
            array (
                'id' => 26,
                'category_id' => 3,
                'body' => 'Et et tempora accusantium autem commodi.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            26 => 
            array (
                'id' => 27,
                'category_id' => 3,
                'body' => 'Deserunt culpa rerum incidunt.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            27 => 
            array (
                'id' => 28,
                'category_id' => 3,
                'body' => 'Autem recusandae qui ea quidem nihil porro neque.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            28 => 
            array (
                'id' => 29,
                'category_id' => 3,
                'body' => 'Suscipit quibusdam quisquam perferendis.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            29 => 
            array (
                'id' => 30,
                'category_id' => 4,
                'body' => 'Facilis consectetur praesentium quasi id soluta in.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            30 => 
            array (
                'id' => 31,
                'category_id' => 4,
                'body' => 'Cumque corporis commodi vel occaecati.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            31 => 
            array (
                'id' => 32,
                'category_id' => 4,
                'body' => 'Voluptatem sunt non porro occaecati tenetur.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            32 => 
            array (
                'id' => 33,
                'category_id' => 4,
                'body' => 'Et qui veniam consequuntur recusandae.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            33 => 
            array (
                'id' => 34,
                'category_id' => 4,
                'body' => 'Quae voluptas qui culpa vel sint nemo quae.',
                'done' => 1,
                'user_tag' => 'quibusdam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            34 => 
            array (
                'id' => 35,
                'category_id' => 4,
                'body' => 'Dolorem dolor reiciendis velit fugit voluptas deserunt sint sunt.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            35 => 
            array (
                'id' => 36,
                'category_id' => 4,
                'body' => 'Voluptatem molestiae et ut voluptas quisquam.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            36 => 
            array (
                'id' => 37,
                'category_id' => 4,
                'body' => 'Laborum non quod et.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            37 => 
            array (
                'id' => 38,
                'category_id' => 4,
                'body' => 'Laborum aperiam quod ipsum officiis quis.',
                'done' => 1,
                'user_tag' => 'et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            38 => 
            array (
                'id' => 39,
                'category_id' => 5,
                'body' => 'Magni dignissimos similique eius explicabo architecto.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            39 => 
            array (
                'id' => 40,
                'category_id' => 5,
                'body' => 'Delectus laborum quasi iusto recusandae qui consequatur pariatur.',
                'done' => 1,
                'user_tag' => 'est',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            40 => 
            array (
                'id' => 41,
                'category_id' => 5,
                'body' => 'Veniam iure vel esse quae similique veniam et et.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            41 => 
            array (
                'id' => 42,
                'category_id' => 5,
                'body' => 'Ut sunt et velit sint aut.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            42 => 
            array (
                'id' => 43,
                'category_id' => 5,
                'body' => 'Ut et qui quaerat dolorem qui.',
                'done' => 0,
                'user_tag' => 'velit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            43 => 
            array (
                'id' => 44,
                'category_id' => 5,
                'body' => 'Corrupti hic mollitia corrupti a iste atque.',
                'done' => 0,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            44 => 
            array (
                'id' => 45,
                'category_id' => 5,
                'body' => 'Distinctio est ab dolores voluptatem a sed.',
                'done' => 1,
                'user_tag' => NULL,
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            45 => 
            array (
                'id' => 46,
                'category_id' => 5,
                'body' => 'Numquam quia voluptatem tempora qui rem recusandae maiores.',
                'done' => 1,
                'user_tag' => 'illum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            46 => 
            array (
                'id' => 47,
                'category_id' => 5,
                'body' => 'Enim ipsam sit molestiae omnis possimus.',
                'done' => 0,
                'user_tag' => 'ex',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
        ));
        
        
    }
}