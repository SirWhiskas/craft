<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameWorld extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_world', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('owner_id');
            $table->integer('world_id');
            $table->integer('region_id');
            $table->integer('location_id');
            $table->integer('character_id');
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
        Schema::dropIfExists('game_world');
    }
}
