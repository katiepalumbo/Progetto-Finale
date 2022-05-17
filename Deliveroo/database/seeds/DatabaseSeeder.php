<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(NewUsersTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        $this->call(TypeUserSeeder::class);
        

    }
}
