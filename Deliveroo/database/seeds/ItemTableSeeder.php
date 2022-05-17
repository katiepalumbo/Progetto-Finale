<?php

use App\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $items = [
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            [
                "item_name" => "Sushu Maki - 12 pezzi",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/443/638/469/japanese-cuisine-food-japanese-food-sashimi-wallpaper-preview.jpg'),
                "description" => "Riso, nori, salmone, semi di sesamo"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Cioccolatini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg'),
                "description" => "Assortimento di cioccolatini perfetto per ogni occasione"
            ],
            [
                "item_name" => "Chicken Tikka Masala",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '),
                "description" => "Pollo, riso, e salsa di masala"
            ],
            [
                "item_name" => "Pizza della Casa",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
                '),
                "description" => "Stile napoletano con mozzarella di bufala"
            ],
            [
                "item_name" => "Macedonia",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/482/397/276/food-fruit-delicious-sweet-wallpaper-preview.jpg'),
                "description" => "Gelato al gusto di frutta mista"
            ],
            [
                "item_name" => "Osechi Syogatsu",
                "image" => Url('https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg'),
                "description" => "Piatto tipico giapponese"
                
            ],
            [
                "item_name" => "Hamburger all'americana",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                '),
                "description" => "500g di carne di bovino italiano, pan brioche, salsa speciale"
            ],
            [
                "item_name" => "Spiedini",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg'),
                "description" => "Spiedini di salsiccia e pollo, con verdura mista"
            ],
            [
                "item_name" => "Sushi Maki Rainbow",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg'),
                "description" => "Assortimento di pesce crudo con avocado, riso, e nori"
            ],
            [
                "item_name" => "Pollo Delizioso",
                "image" => Url('https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg'),
                "description" => "Pollo all'americana"
            ],
            [
                "item_name" => "Broccoli Beef",
                "image" => Url('https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg'),
                "description" => "Carne con broccoli e sugo"
            ],
            [
                "item_name" => "Salmone e verdura",
                "image" => Url('https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                '),
                "description" => "Salmone pescato dal fiume con verdura di stagione"
            ],
            [
                "item_name" => "Hamburger",
                "image" => Url('https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '),
                "description" => "100% carne italiana, cotta a piacere"
            ],
            

        

               

                


        
            
        ];
        
        foreach($items as $item) {

            $newItem = new Item();

            $newItem->item_name = $item['item_name'];
            $newItem->image = $item['image'];
            $newItem->description = $item['description'];

            // creazione slug, verifica se giÃ  esistente e crea slug univoco su DB
            $newItem->slug = Str::slug($newItem->item_name);
            $counter = 1;
            while (Item::where('slug', $newItem->slug)->first()) {
                $newItem->slug = Str::slug($newItem->name) . '-' . $counter;
                $counter++;
            }

            $newItem->category_id = $faker->numberBetween(1,9);
            $newItem->user_id = $faker->numberBetween(1,20);
            $newItem->price = $faker->numberBetween(2, 15);
            $newItem->quantity = $faker->numberBetween(1, 1);

            $newItem->visible = rand(true, false);

            $newItem->save();
        }
    }
}


// https://c4.wallpaperflare.com/wallpaper/816/895/618/cuisine-food-india-indian-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/595/868/852/hamburger-food-buns-fast-food-wallpaper-preview.jpg
               
// https://c1.wallpaperflare.com/preview/656/38/328/salmon-fish-grilled-fish-grill.jpg
                
// https://c4.wallpaperflare.com/wallpaper/946/557/290/ice-cream-food-colorful-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/234/543/684/food-pizza-wallpaper-preview.jpg
// s://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg
                
// https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg
                
// https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg
                
// https://c4.wallpaperflare.com/wallpaper/892/265/318/salmon-meal-dinner-lunch-wallpaper-preview.jpg
                
// https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                
// https://c4.wallpaperflare.com/wallpaper/330/925/208/salmon-food-dish-meal-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/816/895/618/cuisine-food-india-indian-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/595/868/852/hamburger-food-buns-fast-food-wallpaper-preview.jpg
               
// https://c1.wallpaperflare.com/preview/656/38/328/salmon-fish-grilled-fish-grill.jpg
                
// https://c4.wallpaperflare.com/wallpaper/946/557/290/ice-cream-food-colorful-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/234/543/684/food-pizza-wallpaper-preview.jpg

