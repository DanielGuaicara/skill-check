<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UpdateTriggerToCalculateLifePointsStreaks extends Migration
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
        current_streaks integer;
        total_streaks_points integer;
        last_streaks date;
        new_date date;
        date_comparation date;
        json_data_new json;
        json_data_streaks_new json;
        BEGIN
            life_points = (select life_time_score from gymnasts where id = new.gymnast_id);
            total = life_points + new.points;
            current_streaks = (select current_streak_points from gymnasts where id = new.gymnast_id);
            date_comparation = NEW.created_at::TIMESTAMP::date;
            last_streaks = (select CASE WHEN last_streak is null THEN '1911-1-01' ELSE last_streak END 
            from gymnasts where id = new.gymnast_id);
            ongoing_p = (select ongoing_points from gymnasts where id = new.gymnast_id);
            total_ongoing_points = ongoing_p + new.points;
            total_streaks_points = current_streaks;
            if (floor(total/1000) > floor(life_points/1000) ) then
            json_data_new =  json_build_object('points',1000,'total_points', total, 'test', date_comparation);
            insert into feed_entries (gymnast_id, type, data, created_at) 
            VALUES (new.gymnast_id, 3,json_data_new, NEW.created_at);
            end if;
            if (date_comparation = (last_streaks + interval '1 day')) then
            total_streaks_points = current_streaks + 1 ;
            last_streaks =  NEW.created_at;
            end if;
            if (date_comparation > (last_streaks + interval '1 day')) then
            total_streaks_points = 1 ;
            last_streaks =  NEW.created_at;
            end if;
            if (floor(total_streaks_points/10) > floor(current_streaks/10) ) then
            json_data_streaks_new =  json_build_object('streaks',10,'total_streaks', total_streaks_points);
            insert into feed_entries (gymnast_id, type, data, created_at) 
            VALUES (new.gymnast_id, 5,json_data_streaks_new, NEW.created_at);
            end if;
            UPDATE gymnasts g set life_time_score = total, ongoing_points = total_ongoing_points,
            current_streak_points = total_streaks_points, last_streak =  last_streaks
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
