<?php

use App\Item;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemsTableSeeder extends Seeder
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

            $newItem->visible = rand(true, false);
            $newItem->image = 'https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg?cs=srgb&dl=pexels-ella-olsson-1640777.jpg&fm=jpg';
            $newItem->save();
        }

}
}
