<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ['Antipasto', 'Primo Piatto', 'Secondo Piatto', 'Contorno', 'Dolce', 'Lievitati', 'Alcolici', 'Analcolici', 'Finger Food'];

        foreach($categories as $category){

            $new_category = new Category();
            $new_category->name = $category;
            $new_category->slug = Str::slug($category);
            $new_category->save();

        }

    }
}
