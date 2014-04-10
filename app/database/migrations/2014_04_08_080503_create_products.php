<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('products', function($table) {
            $table->increments('id');
            $table->text('name');
            $table->string('slug')->unique();
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('cat_id');

            // Add needed columns here (f.ex: name, slug, path, etc.)
            // $table->string('name', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('products');
    }

}
