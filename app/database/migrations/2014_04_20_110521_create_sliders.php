<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliders extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('sliders', function($table) {
            $table->increments('id');
            $table->text('name');
            $table->text('link');
            $table->text('image');
            $table->tinyinteger('status')->default(0);
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();
            $table->timestamps();

            $table->index('parent_id');
            $table->index('lft');
            $table->index('rgt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('sliders');
    }

}
