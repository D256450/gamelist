<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->integer('hrsplayed');
            $table->string('genre', 255);
            $table->boolean('singleplayer');
            $table->boolean('local_multiplayer');
            $table->boolean('online_multiplayer');
            $table->boolean('DLC');
            $table->string('platform', 255);
            $table->unsignedDecimal('rating');
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
        Schema::dropIfExists('games');
    }
}
