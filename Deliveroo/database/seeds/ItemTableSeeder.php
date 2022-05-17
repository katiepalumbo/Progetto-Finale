<?php

use Illuminate\Database\Seeder;
use App\Item;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<160; $i++){

            $newItem = new Item();

            $newItem->item_name = ucfirst($faker->word());

            // creazione slug, verifica se già esistente e crea slug univoco su DB
            $newItem->slug = Str::slug($newItem->item_name);
            $counter = 1;
            while (Item::where('slug', $newItem->slug)->first()) {
                $newItem->slug = Str::slug($newItem->name) . '-' . $counter;
                $counter++;
            }

            $newItem->category_id = $faker->numberBetween(1,9);
            $newItem->user_id = $faker->numberBetween(1,20);
            $newItem->price = $faker->numberBetween(2, 15);
            $newItem->description = $faker->paragraph();
            $newItem->quantity = $faker->numberBetween(1, 1);

            $newItem->visible = rand(true, false);

            $newItem->image = Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
            ');

            $newItem->save();
        }
    }
}
