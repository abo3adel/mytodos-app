<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Todo;
use Arr;
use DB;
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
        DB::beginTransaction();

        // $this->call(UsersTableSeeder::class);
        // $this->call(CategoriesTableSeeder::class);
        // $this->call(TodosTableSeeder::class);
        // $this->call(TagsTableSeeder::class);

        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()
            ->has(Category::factory()->count(5))
            ->create([
                "name" => "Ahmed Adel",
                "email" => "user@mytodos.com",
            ]);

        Category::each(function (Category $category) {
            $category->todos()->saveMany(
                $todos = Todo::factory()
                    ->count(random_int(5, 10))
                    ->make()
            );
        });

        // create 3 tags by admin
        Tag::factory()
            ->count(3)
            ->sequence(
                ["title" => "urgent"],
                ["title" => "easy"],
                ["title" => "needs help"]
            )
            ->create();

        Todo::each(function (Todo $todo) {
            // random bool
            if (!!random_int(0, 1)) {
                $randTag = Tag::find(random_int(1, 3));
                $todo->tags()->save($randTag);
            }
        });

        DB::commit();
    }
}
