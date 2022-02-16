<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('pseudo');
            $table->string('poste');
            $table->string('place');
            $table->string('img_membre')->default('default_user.png');
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitch')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membres');
    }
}
