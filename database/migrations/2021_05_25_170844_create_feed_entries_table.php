<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_entries', function (Blueprint $table) {
            $table->id();
            $table->integer('gymnast_id')->nullable(false);
            $table->foreign('gymnast_id')->references('id')->on('gymnasts')->onDelete('cascade');
            $table->unsignedTinyInteger('type')->nullable(false);
            $table->json('data')->nullable(false);
            $table->json('interactions')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feed_entries');
    }
}
