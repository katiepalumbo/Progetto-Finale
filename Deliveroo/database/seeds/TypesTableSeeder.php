<?php

use App\Type;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = ['Italiano', 'Internazionale', 'Cinese', 'Giapponese', 'Messicano', 'Indiano', 'Pesce', 'Carne', 'Pizza', 'Americano', 'Etnico', 'Kebab', 'Poke', 'Spesa', 'Dessert', 'Gelato'];

        foreach($types as $type){

            $new_type = new Type();
            $new_type->name = $type;
            $new_type->slug = Str::slug($type);
            $new_type->save();

        }

    }
}
