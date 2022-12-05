<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompletedChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('completed_challenges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gymnast_id');
            $table->foreign('gymnast_id')->references('id')->on('gymnasts')->onDelete('cascade');
            $table->unsignedBigInteger('challenge_id');
            $table->foreign('challenge_id')->references('id')->on('challenges')->onDelete('cascade');
            $table->string('media_path')->nullable();
            $table->string('media_caption')->nullable();
            $table->timestampTz('date_of_completion')->nullable();
            $table->unsignedTinyInteger('points')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('completed_challenge');
    }
}
