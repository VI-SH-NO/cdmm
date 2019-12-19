<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('header');
            $table->text('body');
            $table->text('description');
            $table->date('Date_debut');
            $table->date('Date_fin');
            $table->string('image');

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
        Schema::dropIfExists('articls');
    }
}
