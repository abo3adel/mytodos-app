<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()->has(Category::factory()->count(5))->create([
            'name' => 'Ahmed Adel',
            'email' => 'admin@admin.com',
        ]);

        Category::each(function (Category $category) {
            $category->todos()->saveMany(
                Todo::factory()->count(random_int(5, 20))->make([
                    'category_id' => $category->id,
                ])
            );
        });
    }
}
