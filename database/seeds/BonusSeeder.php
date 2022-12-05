<?php

use App\User;
use App\Gymnast;
use App\Challenge;
use App\CompletedChallenge;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gymnasts = Gymnast::all();
        //$users = User::all();
        foreach ($gymnasts as $key => $value) {
            /*var_dump($value->last_streak);
            if ($value->last_streak === '2022-03-28') {
                continue;
            } else {
                try {
                    $member = Gymnast::find($value->id);
                    $challengeDailys = Challenge::where('is_featured', true)
                        ->where('featured_date', '2022-03-28')
                        ->get();
                    foreach ($challengeDailys as $key => $val) {
                        var_dump("entré a challenges Diarios");
                        var_dump("challenge id : ".$val->id);
                        $isCompleted = CompletedChallenge::where('gymnast_id', $member->id)->where('challenge_id', $val->id)->first();
                        if (! isset($isCompleted)) {
                            var_dump("gymnast no completó challenges Diarios");
                            //guardo completed
                            $new_feed = DB::table('completed_challenges')->insert([
                                'gymnast_id' => $member->id,
                                'challenge_id' => $val->id,
                                'points' => $val->points,
                                'date_of_completion'=> "2022-03-28 16:19:36+00"
                            ]);
                            //update streaks
                            if ($member->last_streak === '2022-03-29') {
                                $last_streak = $member->last_streak;
                            } else {
                                $last_streak = '2022-03-28';
                                $streaks = DB::table('gymnasts')->where('id', $member->id)->update([
                                    'current_streak_points' => $member->current_streak_points + 1,
                                    'last_streak' => $last_streak,
                                ]);
                            }
                            var_dump("exito");
                        } else {
                            var_dump("Si completé");
                        }
                    }
                    //guardo feed all daily
                } catch (\Throwable $th) {
                    return $th;
                }
                
            }*/

            
            /*Gymnast::where()->update([
                'current_streak_points' => $streaks + 1 ,
            ]);*/
            //update to lower
            /*$converted = Str::lower($value->email);
            $users = DB::table('users')->where('id', $value->id)->update([
                'email' => $converted,
            ]);*/
              
        }
        //var_dump($gymnast);
        return "finish";
    }
}
