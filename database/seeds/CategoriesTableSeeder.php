<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use App\Category;


class CategoriesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryNames = ['Storia', 'Avventura', 'Politica', 'Lezione', 'Poesia', 'Articolo'];

        foreach ($categoryNames as $categoryName)
        {
            $category = new Category();

            $category->name = $categoryName;
            $category->slug = Str::slug($categoryName, '-');
            $category->save();
        }
    }
}