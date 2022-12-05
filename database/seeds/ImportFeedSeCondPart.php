<?php

use App\FeedEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportFeedSeCondPart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtenemos todos los gyms
        $gyms = DB::table('gyms')->where('id',4)->get();
        ini_set('memory_limit', '-1');
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
                 //////////// Feeds Type 4
                 var_dump('feeds type 4');
                    try {
                        $allChallengeIDsOLD = null;
                        $TB_allChallenge = DB::connection($jsonSettings->dbname)->table('activities_members')->where('activity_id', 3)->where('new_id', null)->get();
                        var_dump($TB_allChallenge->count());
                        foreach ($TB_allChallenge as $activity){


                            try {

                                
                                $data = '{"name":"'.$activity->name.'","last_name":"'.$activity->last_name.'","message":"has completed all today\'s daily challenges","completed_challenges_ids":"[]"}';

                                $new_feed = FeedEntry::create(array(
                                    'gymnast_id' => $activity->gymnast_id,
                                    'type' => 4,
                                    'data' => $data,
                                    'created_at'=> $activity->created_at
                                ));

                                $allChallengeIDsOLD[$activity->id] = $new_feed->id;
                                DB::connection($jsonSettings->dbname)->table('activities')->where('id', $activity->id)->update(['new_id' => $allChallengeIDsOLD[$activity->id],'updated_at' => null]);
                                

                            } catch (\Throwable $th) {
                                error_log('Alert: 4 '.$th->getMessage(), 0);
                            }


                        }
                        unset($allChallengeIDsOLD);
                        unset($TB_allChallenge);
                    } catch (\Throwable $th) {
                        error_log('Alert: no existe - '.$th->getMessage(), 0);
                    } 
 

                //////////// Fin de Feeds Type 4





                //////////// Feeds Type 3
                var_dump('feeds type 3');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('activities_members')->where('activity_id', 4)->where('new_id', null)->get();
                        var_dump($TB_activities->count());
                        foreach ($TB_activities as $activity){


                            try {

                                
                                $data = '{"points":1000}';

                                $new_feed = FeedEntry::create(array(
                                    'gymnast_id' => $activity->gymnast_id,
                                    'type' => 3,
                                    'data' => $data,
                                    'created_at'=> $activity->created_at
                                ));

                                $streaksIDsOLD[$activity->id] = $new_feed->id;
                                DB::connection($jsonSettings->dbname)->table('activities')->where('id', $activity->id)->update(['new_id' => $streaksIDsOLD[$activity->id],'updated_at' => null]);


                            } catch (\Throwable $th) {
                                error_log('Alert: 5 '.$th->getMessage());
                            }


                        }
                        unset($streaksIDsOLD);
                        unset($TB_activities);
                    } catch (\Throwable $th) {
                        error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                    } 


                //////////// Fin de Feeds Type 3


               //////////// Feeds Type 6 
               var_dump('feeds type 6');
                     try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)
                            ->table('challenge_activities_by_date')
                            ->where('new_id', null)->get();
                        if (isset($TB_activities)) {
                        $member = [];

                            foreach ($TB_activities as $activity){


                                try {

                                    $challenge_name = str_replace("has completed ","",$activity->description);

                                    if (!array_key_exists($activity->member_id, $member)) {
                                        $member[$activity->member_id] = 0;
                                    }

                                    $member[$activity->member_id] = $member[$activity->member_id] + 1;

                                    
                                    $data = '{"completed_challenge":'.$member[$activity->member_id].','.
                                            '"challenge_name":"'.addslashes($challenge_name).'",'.
                                            '"is_featured":true,'.
                                            '"media_path":"'.$activity->media.'",'.
                                            '"media_caption":"'.$activity->media_caption.'",'.
                                            '"date_of_completion":"'.$activity->created_at.'"'.
                                            '}';


                                    //var_dump($activity);
                                    $new_feed = FeedEntry::create(array(
                                        'gymnast_id' => $activity->member_id,
                                        'type' => 6,
                                        'data' => $data,
                                        'created_at'=> $activity->created_at,
                                    ));

                                    $streaksIDsOLD[$activity->id] = $new_feed->id;
                                    DB::connection($jsonSettings->dbname)->table('activities')->where('id', $activity->id)->update(['new_id' => $streaksIDsOLD[$activity->id],'updated_at' => null]);
            
                                    
                                    

                                } catch (\Throwable $th) {
                                    error_log('Alert: 5 '.$th->getMessage());
                                }


                            }
                        }
                        unset($TB_activities);
                        unset($member);
                        unset($streaksIDsOLD);
                    } catch (\Throwable $th) {
                        dd($th);
                        error_log('Alert: no existe - '.$th->getMessage(), 0);
                    } 

                //////////// Fin de Feeds Type 6

        } // Fin Recorrido de Gyms
        var_dump("finalized 4/6");

    }
}
