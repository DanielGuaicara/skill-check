<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGymnastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gymnasts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->date('birth_date');
            $table->integer('life_time_score')->default(0);
            $table->integer('current_streak_points')->default(0);
            $table->date('last_streak')->nullable();
            $table->text('about')->nullable();
            $table->unsignedBigInteger('gyms_has_users_gym_id');
            $table->unsignedBigInteger('gyms_has_users_user_id');
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement("ALTER TABLE gymnasts ADD FOREIGN KEY (gyms_has_users_gym_id,gyms_has_users_user_id) REFERENCES gyms_has_users(gym_id,user_id)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gymnasts');
    }
}
