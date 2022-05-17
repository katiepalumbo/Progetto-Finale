<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
 
class RestaurantsTableSeeder extends Seeder
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

        foreach($restaurants as $key => $restaurant){

            $newRestaurant = new Restaurant();

            $newRestaurant->name = $restaurant["name"];
            $newRestaurant->slug = Str::slug($newRestaurant->name);
           
            $newRestaurant->address = $faker->address();
            $newRestaurant->phone = $faker->phoneNumber();
            $newRestaurant->email = $faker->email();
            $newRestaurant->vat = $faker->numberBetween(10000000000,99999999999);
            $newRestaurant->description = $faker->paragraph(2);
            $newRestaurant->user_id = $key+1;

            $newRestaurant->save();

        }