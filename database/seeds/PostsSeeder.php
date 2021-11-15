<?php


use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<50; $i++){
            $newPost = new Post();

            $newPost->autore=$faker->name();
            $newPost->titolo=$faker->words(3, true);
            $newPost->contenuto=$faker->paragraphs(4, true);
            $newPost->data=$faker->date();


            $newPost->save();
        }
    }
}
