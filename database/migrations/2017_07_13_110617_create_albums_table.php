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
            $table->integer('user_id');
            $table->integer('artist_id');
            $table->integer('media_type_id')->nullable();
            $table->integer('condition_id')->nullable();
			$table->string('title');
			$table->boolean('first_release')->nullable();
			$table->string('release_year')->nullable();
			$table->string('first_release_year')->nullable();
			$table->text('description')->nullable();
			$table->text('private_note')->nullable();
			$table->string('barcode_number')->nullable();
			$table->string('cat')->nullable();
			$table->boolean('for_trade')->nullable();
            $table->timestamps();
        });

        /**
         * Initial data
         */
        DB::table('albums')->insert([
            'user_id'                   => 1,
            'artist_id'                 => 1,
            'media_type_id'             => 1,
            'condition_id'              => 3,
            'title'                     => 'The Future',
            'first_release'             => 1,
            'release_year'              => '1992',
            'first_release_year'        => '1992',
            'description'               => 'First release of Cohen album "The Future"',
            'private_note'              => 'Nothing special',
            'for_trade'                 => 0
        ]);

        DB::table('albums')->insert([
            'user_id'                   => 1,
            'artist_id'                 => 1,
            'media_type_id'             => 2,
            'condition_id'              => 2,
            'title'                     => 'The Future',
            'first_release'             => 1,
            'release_year'              => '2009',
            'first_release_year'        => '2009',
            'description'               => 'Cohen live album "Live in London"',
            'private_note'              => 'Nothing special for private note',
            'for_trade'                 => 0
        ]);

        DB::table('albums')->insert([
            'user_id'                   => 1,
            'artist_id'                 => 2,
            'media_type_id'             => 1,
            'condition_id'              => 3,
            'title'                     => 'The Girl in the Other Room',
            'first_release'             => 1,
            'release_year'              => '2004',
            'first_release_year'        => '2004',
            'description'               => 'Diana album "The Girl in the Other Room"',
            'private_note'              => 'Nothing special',
            'for_trade'                 => 0
        ]);
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
