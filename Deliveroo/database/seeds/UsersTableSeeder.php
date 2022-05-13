<?php

use App\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(faker $faker)
    {
        for($i=0; $i<20; $i++){

            $newUser = new User();

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


            $newUser->description = $faker->paragraph(2);
           
            $newUser->save();
        }
    }
}



            

