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
            $table->string('name',51);
            $table->string('email',101);
            $table->string('password',255);
            $table->string('phone',21);
            $table->string('address',255);
            $table->integer('loaiuser');
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('remember_token',255);
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
        Schema::dropIfExists('users');
    }
}
