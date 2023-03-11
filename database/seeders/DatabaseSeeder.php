<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Categiore;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Categiore::truncate();



            $user = User::factory()->create([
                // 'username' => 'sameh mashhrawi'
            ]);

        Post::factory(8)->create([
            'user_id' => $user->id
        ]);

    //    $personal= Categiore::create([
    //         'name' => 'personal',
    //         'slug' => 'personal'
    //     ]);
    //     $family= Categiore::create([
    //         'name' => 'Family',
    //         'slug' => 'Family'
    //     ]);
    //    $work= Categiore::create([
    //         'name' => 'Work',
    //         'slug' => 'Work'
    //     ]);

    //     Post::create([
    //         'user_id' =>$user->id,
    //         'categiores_id' => $family->id,
    //         'title' =>'My Family Post',
    //         'slug' => 'my-first-slug',
    //         'excerpt' => 'Lorem ipsum dolor sit amet.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel ab pariatur eveniet deserunt laudantium?',
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'categiores_id' => $work->id,
    //         'title' => 'My Woek Post',
    //         'slug' => 'my-work-slug',
    //         'excerpt' => 'Lorem ipsum dolor sit amet.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel ab pariatur eveniet deserunt laudantium?',
    //     ]);

    //     Post::create([
    //         'user_id' => $user->id,
    //         'categiores_id' => $personal->id,
    //         'title' => 'My Personal Post',
    //         'slug' => 'my-personal-slug',
    //         'excerpt' => 'Lorem ipsum dolor sit amet.',
    //         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vel ab pariatur eveniet deserunt laudantium?',
    //     ]);
    }
}
