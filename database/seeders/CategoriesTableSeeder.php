<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 11,
                'title' => 'Iste dolor laudantium.',
                'slug' => 'excepturi-eius-corporis-atque',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 11,
                'title' => 'Velit voluptatem distinctio.',
                'slug' => 'dolore-esse-tenetur-enim-facilis-qui-sit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 11,
                'title' => 'Aliquid et.',
                'slug' => 'quo-assumenda-nostrum-sed-quod-facilis-ducimus-molestiae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 11,
                'title' => 'Doloremque molestiae et.',
                'slug' => 'reprehenderit-sed-numquam-vitae-quo-et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 11,
                'title' => 'Nisi voluptatum.',
                'slug' => 'alias-maxime-quia-exercitationem-quae-dignissimos-sint',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 12,
                'title' => 'Enim qui.',
                'slug' => 'perspiciatis-dolores-totam-sequi-ad-recusandae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 13,
                'title' => 'Inventore aliquid recusandae.',
                'slug' => 'quia-aut-nulla-ea-a-totam-non-qui-ullam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 14,
                'title' => 'Quo pariatur.',
                'slug' => 'nesciunt-rem-perferendis-et-labore',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 15,
                'title' => 'Sed reprehenderit.',
                'slug' => 'aperiam-inventore-enim-sapiente-animi-necessitatibus-atque-adipisci-iusto',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 16,
                'title' => 'Tempora rem.',
                'slug' => 'dolor-consequatur-porro-illum-dolor-aut-quisquam-eum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 17,
                'title' => 'Velit quia aperiam.',
                'slug' => 'dolorem-alias-eligendi-laboriosam-delectus-laboriosam-nobis-sit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 18,
                'title' => 'Itaque vel.',
                'slug' => 'deleniti-unde-nihil-ut',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 19,
                'title' => 'Qui fugit molestiae.',
                'slug' => 'natus-adipisci-est-blanditiis-sint',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 20,
                'title' => 'Deleniti ut dolorem.',
                'slug' => 'vel-voluptatem-culpa-cupiditate-impedit-eos-qui-id',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 21,
                'title' => 'Nulla accusantium temporibus.',
                'slug' => 'et-ab-quis-et-laboriosam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 22,
                'title' => 'Omnis id.',
                'slug' => 'vel-explicabo-sunt-omnis-qui-dolor',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 23,
                'title' => 'Occaecati tempora.',
                'slug' => 'autem-voluptatem-possimus-soluta-aperiam-provident-similique-voluptatem',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 24,
                'title' => 'Aut et.',
                'slug' => 'laboriosam-praesentium-est-unde-dolores',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 25,
                'title' => 'Labore officiis aut.',
                'slug' => 'officia-expedita-rerum-provident-unde',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 26,
                'title' => 'Numquam blanditiis.',
                'slug' => 'accusamus-ex-nesciunt-sint-et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 27,
                'title' => 'Eius facilis sunt.',
                'slug' => 'ratione-minus-magnam-aut-nisi-qui',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 28,
                'title' => 'Quos quo.',
                'slug' => 'id-sed-ipsa-magni-ut-magni-ut-perferendis-illo',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 29,
                'title' => 'Cupiditate qui omnis.',
                'slug' => 'labore-repellat-voluptas-quia',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 30,
                'title' => 'Dolorem deserunt asperiores.',
                'slug' => 'mollitia-qui-ut-adipisci-voluptatum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 31,
                'title' => 'Sit et quia.',
                'slug' => 'suscipit-perspiciatis-laudantium-nam-minus-perferendis',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 32,
                'title' => 'Quibusdam dolores neque.',
                'slug' => 'dolor-eum-qui-qui-velit-sit-rerum-corporis',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 33,
                'title' => 'Eveniet expedita est.',
                'slug' => 'quibusdam-at-dignissimos-architecto-autem-quam-in-velit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 34,
                'title' => 'In magni.',
                'slug' => 'distinctio-non-blanditiis-rem-nesciunt',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 35,
                'title' => 'Molestias unde ut.',
                'slug' => 'occaecati-recusandae-molestiae-sed-modi-reiciendis-similique',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 36,
                'title' => 'Consectetur ut.',
                'slug' => 'dolor-ut-nesciunt-consequatur-neque',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 37,
                'title' => 'Facilis eveniet.',
                'slug' => 'quas-non-similique-aut-aliquam-officia-non-quaerat',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 38,
                'title' => 'Rem esse repudiandae.',
                'slug' => 'nam-totam-numquam-sit-omnis-explicabo-dolor-quas',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 39,
                'title' => 'Consectetur omnis voluptatem.',
                'slug' => 'in-labore-et-nobis-et-velit',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 40,
                'title' => 'Et soluta.',
                'slug' => 'ipsum-quidem-rerum-nisi-hic-distinctio-dolorem-est',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 41,
                'title' => 'Quisquam accusantium.',
                'slug' => 'tempore-repellat-hic-expedita-porro-alias-facere',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 42,
                'title' => 'Eligendi officia suscipit.',
                'slug' => 'odit-deleniti-voluptas-animi-ex-iusto',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 43,
                'title' => 'Qui magnam.',
                'slug' => 'non-ut-harum-sed-accusantium-laboriosam-soluta-illum',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 44,
                'title' => 'Facere error.',
                'slug' => 'occaecati-voluptatum-sed-ipsum-aspernatur-vero-est',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 45,
                'title' => 'Non quod maiores.',
                'slug' => 'temporibus-quos-explicabo-ratione-qui-veniam-praesentium',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 46,
                'title' => 'Voluptatem totam.',
                'slug' => 'quo-qui-provident-et-architecto-eum-excepturi',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            40 => 
            array (
                'id' => 41,
                'user_id' => 47,
                'title' => 'Nisi esse ex.',
                'slug' => 'aliquam-maxime-ab-sint-quam-ducimus',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            41 => 
            array (
                'id' => 42,
                'user_id' => 48,
                'title' => 'Molestiae odio ea.',
                'slug' => 'adipisci-placeat-consequatur-beatae-enim-earum-aspernatur',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            42 => 
            array (
                'id' => 43,
                'user_id' => 49,
                'title' => 'Est quia ut.',
                'slug' => 'vel-quod-repudiandae-qui-enim-omnis-voluptates',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            43 => 
            array (
                'id' => 44,
                'user_id' => 50,
                'title' => 'Dolores fuga.',
                'slug' => 'totam-suscipit-placeat-possimus-et',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            44 => 
            array (
                'id' => 45,
                'user_id' => 51,
                'title' => 'Consectetur molestias sequi.',
                'slug' => 'repellat-ut-repudiandae-dolores-iste-eos-deleniti-in',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            45 => 
            array (
                'id' => 46,
                'user_id' => 52,
                'title' => 'Dolorem eum molestiae.',
                'slug' => 'accusamus-quae-rerum-beatae-eum-repellendus',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            46 => 
            array (
                'id' => 47,
                'user_id' => 53,
                'title' => 'Repudiandae nostrum voluptas.',
                'slug' => 'aut-odit-eius-aut-inventore',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            47 => 
            array (
                'id' => 48,
                'user_id' => 54,
                'title' => 'Laboriosam officia omnis.',
                'slug' => 'esse-harum-quibusdam-est-libero-doloremque',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            48 => 
            array (
                'id' => 49,
                'user_id' => 55,
                'title' => 'Unde occaecati.',
                'slug' => 'reprehenderit-odit-voluptatibus-magni-aspernatur-molestiae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            49 => 
            array (
                'id' => 50,
                'user_id' => 56,
                'title' => 'Iste rerum at.',
                'slug' => 'est-ab-sit-et-cumque',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            50 => 
            array (
                'id' => 51,
                'user_id' => 57,
                'title' => 'Architecto repellat non.',
                'slug' => 'recusandae-optio-laboriosam-recusandae',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
            51 => 
            array (
                'id' => 52,
                'user_id' => 58,
                'title' => 'Id placeat.',
                'slug' => 'illo-aspernatur-ipsam-aut-nam',
                'created_at' => '2022-06-18 21:07:09',
                'updated_at' => '2022-06-18 21:07:09',
            ),
        ));
        
        
    }
}