<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('cats', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date_of_birth');
            $table->date('updated_at');
            $table->date('created_at');
            $table->integer('breed_id')->unsigned()->nullable();
            $table->foreign('breed_id')->references('id')->on('breeds');
        });
        
    
//        $table->softDeletes();
    }

    public function down() {
        Schema::drop('cats');
    }
}
