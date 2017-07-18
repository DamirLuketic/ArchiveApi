<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('artist_id');
            $table->integer('media_type_id')->nullable();
            $table->integer('condition_id')->nullable();
			$table->string('title');
			$table->integer('release_year')->nullable();
			$table->integer('first_release_year')->nullable();
			$table->text('description')->nullable();
			$table->text('private_note')->nullable();
			$table->string('barcode_number')->nullable();
			$table->string('cat')->nullable();
			$table->boolean('for_trade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
