<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::create('pages', function($table) {
            $table->increments('id');
            $table->text('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->enum('template', array('Home', 'Page', 'About', 'News'))->default('Page');
            $table->tinyinteger('status')->default(0);
            $table->integer('parent_id')->nullable();
            $table->integer('lft')->nullable();
            $table->integer('rgt')->nullable();
            $table->integer('depth')->nullable();

            // Add needed columns here (f.ex: name, slug, path, etc.)
            // $table->string('name', 255);

            $table->timestamps();

            // Default indexes
            // Add indexes on parent_id, lft, rgt columns by default. Of course,
            // the correct ones will depend on the application and use case.
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
	public function down()
	{
		//
            Schema::drop('pages');
	}

}
