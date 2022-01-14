<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_requests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_message');
            $table->uuid('id_expediteur');
            $table->uuid('id_destinataire');
            $table->text('message');
            $table->timestamps();

            $table->foreign('id_expediteur')->references('id')->on('users');
            $table->foreign('id_destinataire')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_requests');
    }
}
