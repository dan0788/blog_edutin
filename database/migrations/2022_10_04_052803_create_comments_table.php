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
            $table->decimal('value');
            $table->string('description',255);
            $table->timestamps();
            $table->unsignedBigInteger('id_users')/* ->unique() */;
            $table->foreign('id_users')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('users')//tabla de referencia
                ->onDelete('cascade')
                ->onUpdate('cascade');
                $table->unsignedBigInteger('id_articles')/* ->unique() */;
            $table->foreign('id_articles')//para determinar foreign key
                ->references('id')//campo de referencia
                ->on('articles')//tabla de referencia
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
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
