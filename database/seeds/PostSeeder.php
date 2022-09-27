<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Post;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run (Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $post = new Post;
     
            $post->title = $faker->text(50);
            $post->text = $faker->paragraphs(2,true);
            $post->url = $faker->imageUrl(300, 200, 'animals', true);
            $post->author = $faker->name();
     
            $post->save();
        }
    }
}
