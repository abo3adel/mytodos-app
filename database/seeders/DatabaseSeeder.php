<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Todo;
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

        \App\Models\User::factory(10)->create();

        $user = \App\Models\User::factory()
            ->has(Category::factory()->count(5))
            ->create([
                "name" => "Ahmed Adel",
                "email" => "admin@admin.com",
            ]);

        Category::each(function (Category $category) {
            $category->todos()->saveMany(
                $todos = Todo::factory()
                    ->count(random_int(5, 20))
                    ->make()
            );
        });

        // create 3 tags by admin
        Tag::factory()->count(3)->sequence(
            ['title' => 'urgent'],
            ['title' => 'easy'],
            ['title' => 'needs help'],
        )->create();

        Todo::each(function (Todo $todo) {
            if ($todo->id % 2 === 0) {
                $todo->tags()->save(
                    Tag::factory()
                        ->make()
                );
            }
        });

        DB::commit();
    }
}
