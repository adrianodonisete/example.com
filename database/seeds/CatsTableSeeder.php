<?php

//namespace Illuminate\Database;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CatsTableSeeder extends Seeder {

    public function run() {
        DB::table('cats')->insert([
            ['id' => 1, 'name' => "Leco", 'date_of_birth' => "2015-01-15"],
            ['id' => 2, 'name' => "Peti", 'date_of_birth' => "2015-01-15"],
            ['id' => 3, 'name' => "Suzy", 'date_of_birth' => "2015-01-15"]
        ]);
    }

}

/*

 * 
 *  */
