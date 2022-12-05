<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGymsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gyms_has_users', function (Blueprint $table) {
            $table->primary(['user_id', 'gym_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gyms_has_users', function (Blueprint $table) {
            $table->dropPrimary(['user_id', 'gym_id']);
        });
    }
}
