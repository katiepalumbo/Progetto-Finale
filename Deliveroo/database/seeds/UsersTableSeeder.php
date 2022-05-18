<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = [
            [
                "restaurant_name" => "McBooleans",
                "user_cover" =>'https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '
            ],
            [
            "restaurant_name" => "Pasta FaBool",
            "user_cover" => 'https://c4.wallpaperflare.com/wallpaper/165/200/910/food-pizza-cheese-wallpaper-preview.jpg
            '
            ],
            [
                "restaurant_name" => "BamBool Lounge",
                "user_cover" => 'https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg
                '
            ],
            [
                "restaurant_name" => "Los Tres Booleaners",
                'user_cover' => 'https://c1.wallpaperflare.com/preview/710/922/526/chicken-food-lunch-meal.jpg

                '
            ],
            [
                "restaurant_name" => "Bool Sweet Bool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/226/838/327/chocolate-brown-food-sweet-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "Bool-lo Fritto",
                'user_cover' => 'https://c0.wallpaperflare.com/preview/603/618/344/osechi-syogatsu-new-year-january.jpg
                '
            ],
            [
                "restaurant_name" => "Bool-vande",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "HamBoolger",
                'user_cover' => 'https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg

                '
            ],
            [
                "restaurant_name" => "Indian Delight",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/559/564/946/cuisine-food-india-indian-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "Sushi Bool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/858/610/374/food-still-life-sushi-wallpaper-preview.jpg

                '
            ],
            [
                "restaurant_name" => "Bool-ateria",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/946/557/290/ice-cream-food-colorful-wallpaper-preview.jpg'
            
            ],
            [
                "restaurant_name" => "Kebob KeBool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "Panificio Boolean",
                'user_cover' => 'https://c0.wallpaperflare.com/preview/705/730/469/beef-bread-bun-burger.jpg
                '
            ],
            [
                "restaurant_name" => "Pizza Bool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/234/543/684/food-pizza-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "Thai Heaven",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "Fish Bool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/234/543/684/food-pizza-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "McBooleans",
                'user_cover' => 'https://c0.wallpaperflare.com/preview/527/381/127/cooked-meat-on-plate.jpg
                '
            ],
            [
                "restaurant_name" => "Pasta FaBool",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/816/895/618/cuisine-food-india-indian-wallpaper-preview.jpg
                '
            ],
            [
                "restaurant_name" => "BamBool Lounge",
                'user_cover' => 'https://c1.wallpaperflare.com/preview/656/38/328/salmon-fish-grilled-fish-grill.jpg
                '
            ],
            [
                "restaurant_name" => "Gelato Mania",
                'user_cover' => 'https://c4.wallpaperflare.com/wallpaper/946/557/290/ice-cream-food-colorful-wallpaper-preview.jpg
                '
            ],
            // 
                
// 
// s://c4.wallpaperflare.com/wallpaper/374/404/846/brown-bird-perching-during-daytime-wren-wren-wallpaper-preview.jpg
                
// https://c4.wallpaperflare.com/wallpaper/848/809/121/red-and-yellow-boat-wallpaper-preview.jpg
                
// 
                
// 
                
// 
                
// 
                
// 
                
// 
                
// 
                
// https://c4.wallpaperflare.com/wallpaper/595/868/852/hamburger-food-buns-fast-food-wallpaper-preview.jpg
               
// 
                
// 
                
// 
            
        ];

        foreach($users as $user) {

            $newUser = new User();

            $newUser->restaurant_name = $user["restaurant_name"];
            $newUser->user_cover = $user["user_cover"];
            $newUser->name = $faker->firstName();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('testtest');
            $newUser->user_last_name = $faker->lastName();
            $newUser->user_cell_number = $faker->numerify('##########');
            $newUser->user_tax_code = $faker->numerify('###########');
            $newUser->user_street = $faker->streetName();
            $newUser->user_city = $faker->city();
            $newUser->user_zip_code = $faker->numerify('#####');
            $newUser->slug = Str::slug($newUser->restaurant_name);
            $counter = 1;
            while (User::where('slug', $newUser->slug)->first()) {
                $newUser->slug = Str::slug($newUser->restaurant_name) . '-' . $counter;
                $counter++;
            }

            //$newUser->id = $key+1;
            $newUser->description = $faker->paragraph(2);

            $newUser->save();

        }
    }
}
