<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Tag;


class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tagNames=['divertente', 'formativo','FrontEnd','TagBello' , 'TagBrutto'];

        foreach($tagNames as $tagName){

            $newTag = Tag::all();
            $newTag->name= $tagName;
            $newTag->color = $faker->hexColor();

            $newTag->save();
        }
        
    }
}
