<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttrValue extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('attr_value', function($table) {
            $table->increments('id');
            $table->text('value');
            $table->integer('attr_id');

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
        Schema::drop('attr_value');
    }

}
