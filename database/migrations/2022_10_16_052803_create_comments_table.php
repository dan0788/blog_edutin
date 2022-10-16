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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('value');
            $table->string('description',255);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('users')//tabla de referencia
                ->onDelete('cascade');
            $table->unsignedBigInteger('article_id');
            $table->foreign('article_id')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('articles')//tabla de referencia
                ->onDelete('cascade')
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
        Schema::dropIfExists('comments');
    }
};
