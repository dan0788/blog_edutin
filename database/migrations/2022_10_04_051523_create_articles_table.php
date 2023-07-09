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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255)->unique();
            $table->string('introduction',255);
            $table->string('image',255);
            $table->text('body');
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('id_users')->unique();
            $table->foreign('id_users')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('users')//tabla de referencia
                ->onUpdate('cascade');
            $table->unsignedBigInteger('id_categories')->unique();
            $table->foreign('id_categories')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('categories')//tabla de referencia
                ->onUpdate('cascade');
                /* $table->foreignId('id_users')->constrained();
                $table->foreignId('id_categories')->constrained(); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
