<?php

//namespace Illuminate\Database;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BreedsTableSeeder extends Seeder {

    public function run() {
        DB::table('breeds')->insert([
            ['id' => 1, 'name' => "Domestic"],
            ['id' => 2, 'name' => "Persian"],
            ['id' => 3, 'name' => "Siamese"],
            ['id' => 4, 'name' => "Abyssinian"],
            ['id' => 5, 'name' => "Domestico 22"],
            ['id' => 6, 'name' => "Abyssinian 22"],
            ['id' => 7, 'name' => "Persa 22"],
            ['id' => 8, 'name' => "Siames 22"],
        ]);
    }

}
