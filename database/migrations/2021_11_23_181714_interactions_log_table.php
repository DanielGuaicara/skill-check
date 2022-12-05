<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InteractionsLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interaction_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feed_id')->nullable(false);
            $table->unsignedBigInteger('interaction_id')->nullable(false);
            $table->unsignedBigInteger('gymnast_id')->nullable(false);
            $table->boolean('notified')->default(false);
            $table->foreign('interaction_id')->references('id')->on('interactions')->onDelete('cascade');
            $table->foreign('feed_id')->references('id')->on('feed_entries')->onDelete('cascade');
            $table->foreign('gymnast_id')->references('id')->on('gymnasts')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interaction_logs');
    }
}
