<?php

use App\FeedEntry;
use App\CompletedChallenge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportFeedThirdPart extends Seeder
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
            
            //////////// Feeds Type 2
                var_dump('feeds type 2');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('challenge_complete_map')->where('new_id', null)->get();
                        var_dump($TB_activities->count());
                        $member = [];

                        foreach ($TB_activities as $activity){


                            try {

                                $challenge_name = $activity->name;

                                if (!array_key_exists($activity->member_id, $member)) {
                                    $member[$activity->member_id] = 0;
                                }

                                $member[$activity->member_id] = $member[$activity->member_id] + 1;

                                
                                $data = '{"completed_challenge":'.$member[$activity->member_id].','.
                                        '"challenge_id":"'.$activity->challenge_id.'",'.
                                        '"challenge_name":"'.addslashes($challenge_name).'",'.
                                        '"is_featured":true,'.
                                        '"media_path":"",'.
                                        '"media_caption":"",'.
                                        '"points":'.$activity->points.','.
                                        '"date_of_completion":"2021-11-07 23:07:18"'.
                                        '}';


                                $new_feed = FeedEntry::create(array(
                                    'gymnast_id' => $activity->gymnast_id,
                                    'type' => 2,
                                    'data' => $data,
                                ));

                                $streaksIDsOLD[$activity->id] = $new_feed->id;
                                DB::connection($jsonSettings->dbname)->table('challenge_map')->where('id', $activity->id)->update(['new_id' => $streaksIDsOLD[$activity->id],'updated_at' => null]);
                                
                                

                            } catch (\Throwable $th) {
                                error_log('Alert: 5 '.$th->getMessage());
                            }


                        }
                    } catch (\Throwable $th) {
                        dd($th);
                        return $th;
                        error_log('Alert: no existe - '.$th->getMessage(), 0);
                    }  
 
                //////////// Fin de Feeds Type 2






                //////////// Create complete challenge
                var_dump('complete challenges');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('challenge_complete_map')->where('new_complete_challenge_id', null)->where('gym_id', $GymsIDs[$gym->id])->get();
                        var_dump($TB_activities->count());
                        foreach ($TB_activities as $activity){

                            try {


                                /*$new_feed = CompletedChallenge::create(array(
                                    'gymnast_id' => $activity->gymnast_id,
                                    'challenge_id' => $activity->challenge_id,
                                    'points' => $activity->points,
                                    'date_of_completion'=> "2022-02-09 16:19:36+00"
                                ));*/
                                $new_feed = DB::table('completed_challenges')->insertGetId([
                                    'gymnast_id' => $activity->gymnast_id,
                                    'challenge_id' => $activity->challenge_id,
                                    'points' => $activity->points,
                                    'date_of_completion'=> "2022-02-09 16:19:36+00"
                                ]);
                                var_dump("new feed :".$new_feed);
                                $streaksIDsOLD[$activity->id] = $new_feed;
                                DB::connection($jsonSettings->dbname)->table('challenge_map')->where('id', $activity->id)->update(['new_complete_challenge_id' => $streaksIDsOLD[$activity->id],'updated_at' => null]);
                                //

 
                            } catch (\Throwable $th) {
                                error_log('Alert: 5 '.$th->getMessage());
                            }


                        }
                    } catch (\Throwable $th) {
                        return $th;
                        error_log('Alert: no existe - '.$th->getMessage(), 0);
                    } 
 
                 //////////// Fin de Create complete challenge
                 unset($TB_activities);
                 unset($member);
                 unset($streaksIDsOLD);
        } // Fin Recorrido de Gyms
        var_dump("finalized 5/6");

    }
}
