<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->default(3);
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->boolean('active')->default(1);
            $table->boolean('email_verify')->default(false);
            $table->string('verify_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        /**
         * Initial data
         */
        DB::table('users')->insert([
            'role_id'       => 1,
            'name'          => 'Damir',
            'email'         => 'luketic.damir@gmail.com',
            'password'      => 'pass11',
            'first_name'    => 'Damir',
            'last_name'     => 'Luketić'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
