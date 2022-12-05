<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigInteger('user_id')->nullable(false);
            $table->bigInteger('plan_id')->nullable(false);
            $table->string('subscription_id')->nullable(true);
            $table->string('customer_id')->nullable(true);
            $table->string('stripe_email')->nullable(true);
            $table->boolean('status')->default(false);
            $table->string('quantity')->default(1);
            $table->dateTime('start_at')->nullable(true);
            $table->dateTime('end_at')->nullable(true);
            $table->primary(['user_id', 'plan_id']);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}
