<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrigger1ToCalculateLifePoints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
            DROP TRIGGER if exists life_points ON completed_challenges CASCADE;
            DROP FUNCTION if exists UPDATE_LIFE_POINT() CASCADE;'
        );
        $sql = "CREATE FUNCTION UPDATE_LIFE_POINT() 
        RETURNS TRIGGER 
        LANGUAGE PLPGSQL
        AS $$
        DECLARE 
        life_points integer;
        ongoing_p integer;
        total integer;
        total_ongoing_points integer;
        BEGIN
            life_points = (select life_time_score from gymnasts where id = new.gymnast_id);
            total = life_points + new.points;
            ongoing_p = (select ongoing_points from gymnasts where id = new.gymnast_id);
            total_ongoing_points = ongoing_p + new.points;
            if (floor(total)/1000 > floor(life_points)/1000 ) then
            insert into feed_entries (gymnast_id, type, data, created_at) 
            VALUES (new.gymnast_id, 3,'{".'"points"'.": 1000 }', NOW());
            end if;
            UPDATE gymnasts g set life_time_score = total, ongoing_points = total_ongoing_points 
                where g.id = NEW.gymnast_id;
            RETURN NEW;
        END;
        $$";
        DB::unprepared($sql);
        DB::unprepared('CREATE TRIGGER life_points 
            AFTER INSERT ON completed_challenges
            FOR EACH ROW
            EXECUTE PROCEDURE UPDATE_LIFE_POINT()'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('
            DROP TRIGGER if exists life_points ON completed_challenges CASCADE;
            DROP FUNCTION if exists UPDATE_LIFE_POINT() CASCADE;'
        );
    }
}
