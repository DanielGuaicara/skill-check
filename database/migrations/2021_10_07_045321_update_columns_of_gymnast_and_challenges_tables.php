<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnsOfGymnastAndChallengesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("ALTER TABLE gymnasts ALTER COLUMN image_profile TYPE varchar(255);");
        DB::statement("ALTER TABLE challenges ALTER COLUMN name TYPE varchar(255),
        ALTER COLUMN name SET NOT NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("ALTER TABLE gymnasts ALTER COLUMN image_profile TYPE varchar(100);");
        DB::statement("ALTER TABLE challenges ALTER COLUMN name TYPE varchar(45),
        ALTER COLUMN name SET NOT NULL;");
    }
}
