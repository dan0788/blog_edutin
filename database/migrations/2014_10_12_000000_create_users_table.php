<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_users');
            $table->string('full_name',255);
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->rememberToken();
            $table->foreign('id_profiles')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('users')//tabla de referencia
                ->onDelete('cascade')//si se elimina el usuario, se elimina su perfil
                ->onUpdate('cascade');
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
};
