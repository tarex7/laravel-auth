<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Post;
use App\Models\Category;
use App\User;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run (Faker $faker)
    {
        $categories_ids = Category::pluck('id')->toArray();
        $users_ids = User::pluck('id')->toArray();

        for($i = 0; $i < 10; $i++) {

            $post = new Post;
            $post->category_id = Arr::random($categories_ids);
            $post->user_id = user->id;
            $post->title = $faker->text(50);
            $post->text = $faker->paragraphs(8,true);
            $post->url = $faker->imageUrl(300, 200, 'animals', true);
     
            $post->save();
        }
    }
}
