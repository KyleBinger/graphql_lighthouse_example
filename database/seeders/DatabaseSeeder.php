<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            ["id" => 1, "name" => "User 1", "email" => "user.1@gmail.com"],
            ["id" => 2, "name" => "User 2", "email" => "user.2@gmail.com"],
            ["id" => 3, "name" => "User 3", "email" => "user.3@gmail.com"],
            ["id" => 4, "name" => "User 4", "email" => "user.4@gmail.com"],
            ["id" => 5, "name" => "User 5", "email" => "user.5@gmail.com"],
        ]);

        DB::table("posts")->insert([
            ["id" => 1, "author_id" => 1, "title" => "Government needs a lot of help when it comes to tech", "content" => "Reliance on old tech and expensive inner clusters ruin the game."],
            ["id" => 2, "author_id" => 2, "title" => "Why I fell out of love with Destiny", "content" => "One word: Deej."],
            ["id" => 3, "author_id" => 3, "title" => "Toads and Australian Sheppards: The perfect combo", "content" => "One toad to rule them all."],
            ["id" => 4, "author_id" => 4, "title" => "Norway", "content" => "Like Canada, but more socialist."],
            ["id" => 5, "author_id" => 5, "title" => "Assertiveness Training", "content" => "A work in progress that I aim to achieve."],
        ]);

        DB::table("comments")->insert([
            ["id" => 1, "post_id" => 1, "reply" => "Clusters ruin it for the rest of us."],
            ["id" => 2, "post_id" => 2, "reply" => "Every entry in Halo was better by a mile, feels like Bungie really lost their way."],
            ["id" => 3, "post_id" => 3, "reply" => "Toad is so cute!"],
            ["id" => 4, "post_id" => 4, "reply" => "Higher taxes but a higher quality of life."],
            ["id" => 5, "post_id" => 5, "reply" => "You got this girl!"],
        ]);

        // $this->call('UsersTableSeeder');
    }
}
