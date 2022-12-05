<?php

use App\FeedEntry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportFeedFourthPart extends Seeder
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
            
                //////////// Create Interactions 1 clap y 2 highfire
                var_dump('1 clap');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('interactions_map')->where('new_id', '!=', null)->get();
                        var_dump($TB_activities->count());
                        $ID = 0;

                        $data = "";

                        foreach ($TB_activities as $activity){


                            try {

                                if ($activity->interaction_id == 1) {
                                    $interaction_type = "clap";
                                }
                                elseif ($activity->interaction_id == 2) {
                                    $interaction_type = "highfive";
                                }

                                $new_id = $activity->new_id;

                                if ($ID == 0) {
                                    $data = $data.'{"interaction_code":"'.$interaction_type.'","member_id":"'.$activity->gymnast_id.'","is_comment":"0","comment":null,"created_at":"'.$activity->created_at.'"}';
                                   
                                }
                                elseif($ID == $activity->id){
                                    $data = $data.',{"interaction_code":"'.$interaction_type.'","member_id":"'.$activity->gymnast_id.'","is_comment":"0","comment":null,"created_at":"'.$activity->created_at.'"}';
                                }
                                else {
                                   $data = '['.$data.']';

                                   if ($new_id != "") {
                                       DB::connection('pgsql')->table('feed_entries')->where('id', $new_id)->update(['interactions' => $data]);
                                   }
                                   else{
                                       //error_log("No new Id --->".$data, 0);
                                   }
                                    
                                   $data = '{"interaction_code":"'.$interaction_type.'","member_id":"'.$activity->gymnast_id.'","is_comment":"0","comment":null,"created_at":"'.$activity->created_at.'"}';
                                   
                                }

                                $ID = $activity->id;

                            } catch (\Throwable $th) {
                                error_log('Alert: 5 '.$th->getMessage());
                            }

                        

                        $data = '['.$data.']';

                        if ($new_id != "") {
                            DB::connection('pgsql')->table('feed_entries')->where('id', $new_id)->update(['interactions' => $data]);
                        }
                        else{
                            error_log("No new Id --->".$data, 0);
                        }

                    }
                        

                    } catch (\Throwable $th) {
                        dd($th);
                        error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                    }   
 

                //////////// Fin de Create Interactions 1 clap y 2 highfire




                //////////// Create Interactions comments map
                var_dump('interactions');
                    try {
                        $streaksIDsOLD = null;
                        $TB_activities = DB::connection($jsonSettings->dbname)->table('interactions_comment_map')->get();
                        var_dump($TB_activities->count());
                        $ID = 0;

                        $data = "";

                        foreach ($TB_activities as $activity){


                            try {


                                $interaction_type = "comment";

                                $new_id = $activity->new_id;

                                if ($new_id != "") {

                                    try {
                                        if($feed = FeedEntry::find($new_id)){
                                            $comment = $activity->comment ?? null;
                                            $data = [
                                                '0' => [
                                                    'interaction_code' => $interaction_type,
                                                    'member_id' => $activity->gymnast_id,
                                                    'is_comment' => true,
                                                    'comment' => $comment,
                                                    'member_img_profile' => $activity->image_profile,
                                                    'created_at' => $activity->created_at,
                                                ],
                                            ];
                                            $interactions = json_decode($feed->interactions);
                                            if (! isset($interactions)) {
                                                $data = collect($data);
                                                $jsonData = json_encode($data);
                                                $feed->update([
                                                    'interactions' => $jsonData,
                                                ]);
                                            }
                                            else{
                                                array_push($interactions, $data[0]);
                                                $jsonData = json_encode($interactions);
                                                $feed->update([
                                                    'interactions' => $jsonData,
                                                ]);
                                            }
                                        }
                                        else{
                                            error_log('No encontrado - '.$new_id);
                                        }
                                    } catch (\Exception $exc) {
                                        throw $exc;
                                    }

                                }



                            } catch (\Throwable $th) {
                                return $th;
                                error_log('Alert: 5 '.$th->getMessage());
                            }


                        }

                        

                    } catch (\Throwable $th) {
                        return $th;
                        error_log('Alert: no existe - '.$jsonSettings->dbname, 0);
                    }   


                //////////// Create Interactions comments map

                

        } // Fin Recorrido de Gyms
        var_dump("finalized 6/6");
    }
}
