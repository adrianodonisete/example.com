<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('breeds', function($table) {
            $table->increments('id');
            $table->string('name');
        });
    }

    public function down() {
        Schema::drop('breeds');
    }

}
