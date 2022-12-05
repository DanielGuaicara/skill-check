<?php

use Illuminate\Database\Seeder;
use App\CompletedChallenge;
use App\Gymnast;
use App\FeedEntry;
use Illuminate\Support\Facades\DB;

class ImportMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Obtenemos todos los gyms
        $gyms = DB::table('gyms')->where('id', 4)->get();

        // Relacion de ids BaseDatos vieja y nueva
        $GymsIDs[1] = 1;
        $GymsIDs[2] = 7;
        $GymsIDs[3] = 8;
        $GymsIDs[4] = 13;
        $GymsIDs[5] = 14;
        $GymsIDs[6] = 18;
        $GymsIDs[7] = 19;
        $GymsIDs[8] = 20;


        // Para cada uno de los Gyms
        foreach ($gyms as $gym){
            var_dump($gym->name);
            // Obtenemos la configucación del gym para sacar el nombre de la BD ($jsonSettings->dbname)
            $jsonSettings = json_decode($gym->settings);

                //////////// Create Scores (Challenges Sum)

                try {
                    $TB_scores= DB::connection($jsonSettings->dbname)->table('scores')->get();

                    foreach ($TB_scores as $score){
                        var_dump("scores id : ".$score->new_id);
                        try{

                            DB::connection('pgsql')->table('gymnasts')->where('id', $score->new_id)->update(['ongoing_points' => $score->score]);
                            
                        } catch (\Throwable $th) {
                            
                            error_log('Alert: temp_user_id - '.$th->getMessage(), 0);

                        }

                    }

                } catch (\Throwable $th) {
                    dd($th);
                    error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                } 
                

                //////////// Fin de Create Scores (Challenges Sum)



                //////////// Create progress 0 
                var_dump('create progress');
                $users = Gymnast::select('id')->where('gyms_has_users_gym_id', $gym->id)->get();
                if (isset($users)) {
                    foreach ($users as $value) {
                        try {
                            var_dump("id user : ".$value->id);
                            $progressIDsOLD = null;
                            $TB_progress = DB::connection($jsonSettings->dbname)->table('progress_feed')
                                ->where('new_progress_id', null)
                                ->whereNotNull('skill_new_id')
                                ->where('new_id', $value->id)
                                ->get();
    
                            //$file = fopen($jsonSettings->dbname.".txt", $TB_progress);
                            var_dump("progress_count : ".$TB_progress->count());
                            //dd($TB_progress->count());
                            if ($TB_progress->count() <= 0) {
                                continue;
                            }
                            foreach ($TB_progress as $progress){
    
                                try {
        
                                    $progress_status = 0;
        
                                    switch ($progress->status) {
                                        case 'Learning it':
                                            $progress_status = 1;
                                            break;
                                        case 'Can do it sometimes':
                                            $progress_status = 2;
                                            break;
                                        case 'Can do it well!':
                                            $progress_status = 3;
                                            break;
                                        case 'Master':
                                            $progress_status = 4;
                                            break;
                                        
                                        default:
                                            $progress_status = 0;
                                            break;
                                    }
        
                                    $data = '{"progress_status":'.$progress_status.',"name":"'.addslashes($progress->name).'","skill_id":'.$progress->skill_new_id.'}';
        
                                    $new_feed = FeedEntry::create(array(
                                        'gymnast_id' => $progress->new_id,
                                        'type' => 0,
                                        'data' => $data,
                                    ));
        
                                    $progressIDsOLD[$progress->id] = $new_feed->id;
                                    DB::connection($jsonSettings->dbname)->table('progress')->where('id', $progress->id)->update(['new_id' => $progressIDsOLD[$progress->id],'updated_at' => null]);
                                    //fwrite($file, "update `progress` set `new_id` = ".$progressIDsOLD[$progress->id].", `updated_at` = null where `id` = ".$progress->id.";" . PHP_EOL);
                                    
        
                                } catch (\Throwable $th) {
                                    error_log('Alert: temp_user_id - '.$th->getMessage(), 0);
                                }
    
    
                            }
                        } catch (\Throwable $th) {
                         return $th;
                         error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                        }
                    }

                    
                }
                
                      

                // fclose($file); 


                //////////// Fin de Create progress 0 



                //////////// Progress to Gymnasts_has_skills

                var_dump('gymnast_has_skills');
                if (isset($users)) {
                    foreach ($users as $value) {
                        try {
                            $progressIDsOLD = null;
                            $TB_progress = DB::connection($jsonSettings->dbname)->table('progress_feed')
                                ->where('new_gymnasts_has_skills_id', null)
                                ->whereNotNull('skill_new_id')
                                ->where('new_id', $value->id)
                                ->get();
                            var_dump("id user part 2 : ".$value->id);
                            var_dump("progress_count : ".$TB_progress->count());
                            foreach ($TB_progress as $progress){
    
                                try {
        
                                    $progress_status = 0;
        
                                    switch ($progress->status) {
                                        case 'Learning it':
                                            $progress_status = 1;
                                            break;
                                        case 'Can do it sometimes':
                                            $progress_status = 2;
                                            break;
                                        case 'Can do it well!':
                                            $progress_status = 3;
                                            break;
                                        case 'Master':
                                            $progress_status = 4;
                                            break;
                                        
                                        default:
                                            $progress_status = 0;
                                            break;
                                    }
        
        
                                    $new_feed= DB::table('gymnasts_has_skills')->insertGetId(array(
                                        'gymnast_id' => $progress->new_id,
                                        'skill_id' => $progress->skill_new_id,
                                        'progress_status' => $progress_status
                                    ));
                                    var_dump("gymnas_skilkl : ".$new_feed);
                                    if (isset($new_feed)) {
                                        $progressIDsOLD[$progress->id] = $new_feed;
                                        DB::connection($jsonSettings->dbname)
                                            ->table('progress')
                                            ->where('id', $progress->id)
                                            ->update(['new_gymnasts_has_skills_id' => $progressIDsOLD[$progress->id],'updated_at' => null]);
                                    }
                                    
            
                                    //fwrite($file, "update `progress` set `new_gymnasts_has_skills_id` = ".$progressIDsOLD[$progress->id].", `updated_at` = null where `id` = ".$progress->id.";" . PHP_EOL);
                                    
        
                                } catch (\Throwable $th) {
                                    return $th;
                                    error_log('Alert: temp_user_id - '.$th->getMessage(), 0);
                                }
    
    
                            }
                        } catch (\Throwable $th) {
                            return $th;
                            error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                        }
                    }
                }
                
                

                   


                //////////// Fin de Progress to Gymnasts_has_skills


                //////////// Feeds Type 5
                var_dump('feeds type 5');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('activities_members')->where('activity_id', 5)->where('new_id', null)->get();

                        foreach ($TB_activities as $activity){


                            try {

                                
                                $data = '{"streaks":1000}';

                                $new_feed = FeedEntry::create(array(
                                    'gymnast_id' => $activity->gymnast_id,
                                    'type' => 5,
                                    'data' => $data,
                                    'created_at'=> $activity->created_at
                                ));

                                $streaksIDsOLD[$activity->id] = $new_feed->id;
                                DB::connection($jsonSettings->dbname)->table('activities')->where('id', $activity->id)->update(['new_id' => $streaksIDsOLD[$activity->id],'updated_at' => null]);
        


                            } catch (\Throwable $th) {
                                
                                error_log('Alert: 5 '.$th->getMessage(), 0);
                            }


                        }
                    } catch (\Throwable $th) {
                        error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                    }  
 

                 //////////// Fin de Feeds Type 5
        } // Fin Recorrido de Gyms
        var_dump("finalized 3/6");

    }
}
