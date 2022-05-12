<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = factory(User::class)->create([
            'name' => 'Universal User 1',
            'email' => 'user1@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 1 Restaurant',
            'slug' => 'user-1-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);
        $user = factory(User::class)->create([
        
            'name' => 'Universal User 2',
            'email' => 'user2@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 2 Restaurant',
            'slug' => 'user-2-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);

        $user = factory(User::class)->create([
            'name' => 'Universal User 3',
            'email' => 'user3@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 3 Restaurant',
            'slug' => 'user-3-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);
        $user = factory(User::class)->create([
        
            'name' => 'Universal User 4',
            'email' => 'user4@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 4 Restaurant',
            'slug' => 'user-4-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);
        $user = factory(User::class)->create([
            'name' => 'Universal User 5',
            'email' => 'user5@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 5 Restaurant',
            'slug' => 'user-5-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);
        $user = factory(User::class)->create([
        
            'name' => 'Universal User 6',
            'email' => 'user6@universal.com',
            'password' => bcrypt('aDmIn'),
            'user_last_name' => 'lastname',
            'user_cell_number' => '1231231231',
            'user_tax_code' => '12312312312',
            'user_street' => '123 No Way',
            'user_city' => 'Boolcity',
            'user_zip_code' => '12345',
            'restaurant_name' => 'User 6 Restaurant',
            'slug' => 'user-6-restaurant',
            'description' => 'Lorem ipsum dolor, sit amet consectetur 
            adipisicing elit.',

        ]);
        // $fakeUsers = [

        //     [
        //         'name' => 'Universal User 1',                
        //         'email' => 'user1@universal.com',
        //         'password' => bcrypt('P@ssw0rd'),
        //         'user_last_name' => 'lastname',
        //         'user_cell_number' => '1231231231',
        //         'user_tax_code' => '12312312312',
        //         'user_street' => '123 No Way',
        //         'user_city' => 'Boolcity',
        //         'user_zip_code' => '12345',
        //         'restaurant_name' => 'User 1 Restaurant',
        //         'description' => 'Lorem ipsum dolor, sit amet consectetur 
        //         adipisicing elit.',
        //     ],

        //     [
        //         'name' => 'Universal User 2',                
        //         'email' => 'user2@universal.com',
        //         'password' => bcrypt('P@ssw0rd'),
        //         'user_last_name' => 'lastname',
        //         'user_cell_number' => '1231231231',
        //         'user_tax_code' => '12312312312',
        //         'user_street' => '123 No Way',
        //         'user_city' => 'Boolcity',
        //         'user_zip_code' => '12345',
        //         'restaurant_name' => 'User 2 Restaurant',
        //         'description' => 'Lorem ipsum dolor, sit amet consectetur 
        //         adipisicing elit.',



        //foreach($user as $fakeUser){
            
        //     $newUser = new User();
        //     $newUser->name = $user["name"];
        //     $newUser->email = $user["email"];
        //     $newUser->user_last_name = $user["user_last_name"];
        //     $newUser->user_cell_number = $user["user_cell_number"];
        //     $newUser->user_tax_code = $user["user_tax_code"];
        //     $newUser->user_street = $user["user_street"];
        //     $newUser->user_city = $user["user_city"];
        //     $newUser->user_zip_code = $user["user_zip_code"];
        //     $newUser->description = $user['description'];
        //     $newUser->slug = Str::slug($user["restaurant_name"]);

        //     $newUser->save();

        // }

        // DB::table('users')->insert([
        //     'Password' => bcrypt('P@ssw0rd'),
        //     'isEnabled' => true,
        //     'isAdmin' => true
        //     ]);
    }
}