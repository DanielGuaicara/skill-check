<?php

use App\User;
use App\Gymnast;
use App\Challenge;
use Carbon\Carbon;
use App\CompletedChallenge;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImportMembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        foreach ($gyms as $gym){
            var_dump($gym->name);
        //////////// Create Members (Gymnasts)
            $users = DB::table('gyms_has_users')->where('gym_id', $gym->id)->get();
            $jsonSettings = json_decode($gym->settings);

            if (! isset($users)) {
                continue;
            }

            if ($users->count() <= 0) {
                continue;
            }
            $UsersIDsOLD = [];
            $membersIDsOLD = [];
            foreach ($users as $usr) {
                $old_user_id = DB::connection($jsonSettings->dbname)
                    ->table('users')
                    ->where('new_id', $usr->user_id)->first();
                    var_dump("row user id nueva: ".$usr->user_id);
                    if (! isset($old_user_id)) {
                        continue;
                    }
                    $TB_members = DB::connection($jsonSettings->dbname)
                        ->table('member')
                        ->where('user_id', $old_user_id->id)
                        ->where('new_id', null)
                        ->get();
                    //var_dump("aaa : ".$UsersIDsOLD);
                    var_dump("count memebers : ".$TB_members->count());
                    var_dump("temp id bd vieja: ".$old_user_id->id);
                    foreach ($TB_members as $member){

                        $temp_picture = $member->picture;
        
                        //var_dump($member);
                        try {
                            $temp_user_id = $old_user_id->id;
                            var_dump("id user :".$temp_user_id);
                            if ($member->birth == "0000-00-00") {
                                $member->birth = "1969-02-12";
                            }
                            $new_member = Gymnast::create(array(
                                'first_name' => $member->first,
                                'last_name' => $member->last,
                                'birth_date' => $member->birth,
                                'life_time_score' => $member->lifetime_points,
                                'current_streak_points' => $member->current_streak,
                                'last_streak' => $member->last_date_streak,
                                'about' => iconv(mb_detect_encoding($member->about, mb_detect_order(), true), "UTF-8", $member->about),
                                'image_profile' => $temp_picture,
                                'gyms_has_users_gym_id' => $gym->id,
                                'gyms_has_users_user_id' => $usr->user_id,
                            ));
        
                            $membersIDsOLD[$member->id] = $new_member->id;
                            var_dump("he creado member : ".$new_member->id);
                            DB::connection($jsonSettings->dbname)->table('member')->where('id', $member->id)->update(['new_id' => $membersIDsOLD[$member->id],'updated_at' => null]);
                            var_dump("updated bd vieja");
                            //////////// Gymnasts has classes
                                var_dump("gymnast has classes");
                                $GymnastsHasClassesIDsOLD = null;
        
                                $TB_Gymnasts_has_classes= DB::connection($jsonSettings->dbname)->table('roster_map')
                                    ->where('member_id', $member->id)
                                    ->where('new_id', null)->get();
                                var_dump("gymnast has classes count : ".$TB_Gymnasts_has_classes->count());

                                foreach ($TB_Gymnasts_has_classes as $Gymnasts_has_classes){
                                    //var_dump($Gymnasts_has_classes);
                                        //var_dump($Gymnasts_has_classes);
                                        $class = DB::connection($jsonSettings->dbname)->table('classes')->where('id', $Gymnasts_has_classes->class_id)->first();
                                        //var_dump($class);
                                        if (isset($class)) {
                                            $new_Gymnasts_has_classes = DB::table('gymnasts_has_classes')->insertGetId([
                                                'gymnast_id' => $new_member->id,
                                                'class_id' => $class->new_id,
                                            ]);
                                        }
                                }
                            var_dump("fin gymnast_has_clases");
                            //////////// Fin de Gymnasts has classes
                        } catch (\Throwable $th) {
                            //$temp_user_id = 0;
                            dd($th);
                            error_log('Alert: temp_user_id - '.$th->getMessage(), 0);
                        }
        
        
                    }
            }  
        //////////// Fin de Create Members (Gymnasts)


        /////////// Challenges

        $ChallengeGymIDsOLD = null;

        var_dump("challenges");
        $TB_Challenge = DB::connection('central')->table('challenges')->get();
        $TB_Challenge_Gym = DB::connection('central')->table('challenges_gyms')->where('gym_id', $GymsIDs[$gym->id])->get();
        ///dd($TB_Challenge);
        foreach ($TB_Challenge as $Challenge){
            $ChallengeIDsOLD[$Challenge->id]["id"] = $Challenge->id;
            $ChallengeIDsOLD[$Challenge->id]["name"] = $Challenge->name;
            $ChallengeIDsOLD[$Challenge->id]["description"] = $Challenge->description;
            $ChallengeIDsOLD[$Challenge->id]["points"] = $Challenge->points;
            //$ChallengeIDsOLD[$Challenge->id]["points"] = $Challenge->points;
        }


        foreach ($TB_Challenge_Gym as $Challenge_Gym){

            try {
                $temp_cha_name = $ChallengeIDsOLD[$Challenge_Gym->challenge_id]["name"];
            } catch (\Throwable $th) {
                $temp_cha_name = null;
                error_log('Alert: temp_cha_name - '.$th->getMessage(), 0);
            }

            try {
                $temp_cha_description = $ChallengeIDsOLD[$Challenge_Gym->challenge_id]["description"];
            } catch (\Throwable $th) {
                $temp_cha_description = null;
                error_log('Alert: temp_cha_description - '.$th->getMessage(), 0);
            }

            try {
                $temp_cha_points = $ChallengeIDsOLD[$Challenge_Gym->challenge_id]["points"];
            } catch (\Throwable $th) {
                $temp_cha_points = null;
                error_log('Alert: temp_cha_points - '.$th->getMessage(), 0);
            }

            try {
                if ($Challenge_Gym->class_id == 0) {
                    $temp_cha_class_id = null;
                } else {
                    $class = DB::table('classes')->where('id', $Challenge_Gym->class_id)->first();
                    $temp_cha_class_id = $class->new_id;
                }
                //$temp_cha_class_id = if ($GymClassIDsOLD[$gym->id][$Challenge_Gym->class_id]) == 0 ?$GymClassIDsOLD[$gym->id][$Challenge_Gym->class_id]:null;

            } catch (\Throwable $th) {
                $temp_cha_class_id = null;
                error_log('Alert: temp_cha_class_id ('.$gym->id.'-'.$Challenge_Gym->class_id.') - '.$th->getMessage(), 0);
            }

             /*if(strlen($temp_cha_name) > $tempC)
                $tempC = strlen($temp_cha_name);*/
            if ($temp_cha_name !== null && $temp_cha_description !== null && $temp_cha_points !== null ) {
                if ($Challenge_Gym->daily_active == 0) {
                    $daily_date = null;
                } else {
                    $daily_date = $Challenge_Gym->daily_date;
                }
                $new_Challenge_Gym = Challenge::create(array(
                    'gym_id' => $gym->id,
                    'class_id' => $temp_cha_class_id,
                    'name' => $temp_cha_name,
                    'description' => $temp_cha_description,
                    'points' => $temp_cha_points,
                    'is_featured' => $Challenge_Gym->daily_active,
                    'featured_date' => $daily_date,
                ));
                //DB::connection('central')->table('challenges_gyms')->where('challenge_id', $gym->id)->get()
                $ChallengeGymIDsOLD[$Challenge_Gym->challenge_id] = $new_Challenge_Gym->id;
                DB::connection('central')->table('challenges_gyms')->where('id', $Challenge_Gym->id)->update(['new_id' => $new_Challenge_Gym->id,'updated_at' => null]);

            }
        }

        //////////// Fin de Challenges



        //////////// Challenges Completed
            //error_log('Alert: Completed challenges ------------------>>>>>>>>>>>>>>>>>> ', 0);
            /*var_dump("completed challenges");
            $CompletedChallengeIDsOLD = null;

            $TB_complete_challenges= DB::connection($jsonSettings->dbname)
                ->table('challenge_map')
                ->where('new_id', null)->get();

            foreach ($TB_complete_challenges as $complete_challenges){
                try {
                    var_dump("compked_challenges : ".$complete_challenges->challenge_id);
                    $Challenges = DB::connection('central')
                        ->table('challenges_gyms')
                        ->where('new_id', $complete_challenges->challenge_id)
                        ->first();
                    if (! isset($Challenges)) {
                        continue;
                    }
                    $ChalNow = Challenge::find($Challenges->new_id);
                if ($ChalNow) {
                    var_dump("existe");
                    //fecha para date of completion
                    if ($ChalNow->featured_date) {
                            $date = Carbon::create($ChalNow->featured_date);
                    } else {
                        $date = Carbon::now('UTC');
                    }
                    $member = $TB_members = DB::connection($jsonSettings->dbname)
                        ->table('member')
                        ->where('id', $complete_challenges->member_id)->first();
                        $new_complete_challenges = CompletedChallenge::create(array(
                            'gymnast_id' => $member->new_id,
                            'challenge_id' => $Challenges->new_id,
                            'points' => $ChalNow->points,
                            'date_of_completion' => $date,
                        ));
                }
                
                    $CompletedChallengeIDsOLD[$complete_challenges->id] = $new_complete_challenges->id;
                } catch (\Throwable $th) {
                    throw $th;
                }
            
            }*/

        //////////// Fin de Challenges Completed
        }//end Foreach gyms
        var_dump("finalized 2/6");
        
    }
}
