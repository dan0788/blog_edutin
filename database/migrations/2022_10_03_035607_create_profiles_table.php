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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('photo',255)->nullable();
            $table->unsignedBigInteger('id_users')/* ->unique() */;
            $table->foreign('id_users')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('users')//tabla de referencia  
                ->onDelete('cascade')//si se elimina el usuario, se elimina su perfil
                ->onUpdate('cascade');//si se actualiza el usuario, se actualiza su perfil
            //segunda forma
            /* $table->foreignId('id_users')->constrained(); */
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
        Schema::dropIfExists('profiles');
    }
};
