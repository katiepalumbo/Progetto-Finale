<?php

use App\User;
use Illuminate\Database\Seeder;
namespace Database\Seeders;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class NewUsersTableSeeder extends Seeder
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
                'user_cover' => url('public/images/hamburger.jpg')
            ],
            [
                "restaurant_name" => "Pasta FaBool",
                'user_cover' => url('public/images/italian.jpg')
            ],
            [
                "restaurant_name" => "BamBool Lounge",
                'user_cover' => url('public/images/chinese.jpg')
            ],
            [
                "restaurant_name" => "Los Tres Booleaners",
                'user_cover' => url('public/images/mexican.jpg')
            ],
            [
                "restaurant_name" => "Bool Sweet Bool",
                'user_cover' => url('public/images/cake.jpg')
            ],
            [
                "restaurant_name" => "Bool-lo Fritto",
                'user_cover' => url('public/images/chicken-wings.jpg')
            ],
            [
                "restaurant_name" => "Bool-vande",
                'user_cover' => url('public/images/drinks.jpg')
            ],
            [
                "restaurant_name" => "HamBoolger",
                'user_cover' => url('public/images/hamburger-joint.jpg')
            ],
            [
                "restaurant_name" => "Indian Delight",
                'user_cover' => url('public/images/indian-restaurant.jpg')
            ],
            [
                "restaurant_name" => "Sushi Bool",
                'user_cover' => url('public/images/sushi.jpg')
            ],
            [
                "restaurant_name" => "Bool-ateria",
                'user_cover' => url('public/images/gelateria.jpg')
            ],
            [
                "restaurant_name" => "Kebob KeBool",
                'user_cover' => url('public/images/kebob-place.jpg')
            ],
            [
                "restaurant_name" => "Panificio Boolean",
                'user_cover' => url('public/images/pane.jpg')
            ],
            [
                "restaurant_name" => "Pizza Bool",
                'user_cover' => url('public/images/pizzeria.jpg')
            ],
            [
                "restaurant_name" => "Thai Heaven",
                'user_cover' => url('public/images/thai-restaurant.jpg')
            ],
            [
                "restaurant_name" => "Fish Bool",
                'user_cover' => url('public/images/seafood-place.jpg')
            ],
            
            
        ];

        foreach($users as $key => $user) {

            $newUser = new User();

            $newUser->restaurant_name = $user["restaurant_name"];
            $newUser->user_cover = $user['user_cover'];
            $newUser->name = $faker->word();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make('testtest');
            $newUser->user_last_name = $faker->word();
            $newUser->user_cell_number = $faker->numerify('##########');
            $newUser->user_tax_code = $faker->numerify('###########');
            $newUser->user_street = $faker->streetName();
            $newUser->user_city = $faker->city();
            $newUser->user_zip_code = $faker->numerify('#####');
            $newUser->restaurant_name = $faker->word();
            $newUser->slug = Str::slug($newUser->restaurant_name);
            $counter = 1;
            while (User::where('slug', $newUser->slug)->first()) {
                $newUser->slug = Str::slug($newUser->restaurant_name) . '-' . $counter;
                $counter++;
            }

            $newUser->user_id = $key+1;
            $newUser->description = $faker->paragraph(2);

            $newUser->save();

        }
    }
}
