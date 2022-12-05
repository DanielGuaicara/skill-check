<?php

use App\FunMedia;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FunMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        FunMedia::insert([
            ["file" => "SkillTrakker Gymnastics Word Scramble.jpg","points" => 0],
            ["file" => "SkillTrakker My Bars Workout Plan.jpg","points" => 100],
            ["file" => "SkillTrakker My Floor Workout Plan.jpg","points" => 100],
            ["file" => "SkillTrakker My Beam Workout Plan.jpg","points" => 100],
            ["file" => "SkillTrakker My Conditioning Workout Plan.jpg","points" => 0],
            ["file" => "SkillTrakker My Vault Workout Plan.jpg","points" => 100],
            ["file" => "SkillTrakker Split Leap Coloring Page.jpg","points" => 0],
            ["file" => "SkillTrakker Matching Game.jpg","points" => 0],
            ["file" => "Gymnastics Skills Crossword-SkillTrakker.jpg","points" => 0],
            ["file" => "SkillTrakker Gymnastics Goal Sheet.jpg","points" => 0],
            ["file" => "SkillTrakker Find a Gymnast Who Game.jpg","points" => 0],
            ["file" => "SkillTrakker New Gymnastics Skill Worksheet.jpg","points" => 0],
            ["file" => "SkillTrakker Practice Until You Get it Right Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Hard Days are the Best Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Don't Practice Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Don't Practice Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Don't Practice Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Dont Practice Quote.jpg","points" => 0],
            ["file" => "SkillTrakker Hard Days are the Best.jpg","points" => 0],
            ["file" => "SkillTrakker Set Goals 2.jpg","points" => 0],
            ["file" => "SkillTrakker Tumble Back.jpg","points" => 0],
            ["file" => "SkillTrakker Split Leap Challenge 2.jpg","points" => 0],
            ["file" => "SkillTrakker Cartwheel Challenge 2.jpg","points" => 0],
            ["file" => "SkillTrakker I Love Gymnastics Bookmarks.jpg","points" => 0],
            ["file" => "SkillTrakker Bookmarks Boys.jpg","points" => 0],
            ["file" => "SkillTrakker Jump off Beam.jpg","points" => 0],
            ["file" => "SkillTrakker Ninja Coloring Page.jpg","points" => 0],
            ["file" => "SkillTrakker Floor Routine Meet Ready Game.jpg","points" => 0],
            ["file" => "SkillTrakker Beam Routine Meet Ready Game.jpg","points" => 0],
            ["file" => "SkillTrakker Bar Routine Meet Ready Game.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra1.jpg","points" => 0],
            ["file" => "SkilTrakkerMantra2.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra3.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra4.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra5.jpg","points" => 0],
            ["file" => "SKilltrakkerMantra6.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra7.jpg","points" => 0],
            ["file" => "SkillTrakkerMantra8.jpg","points" => 0],
            ["file" => "BelievedSheCouldFlyColoringSheet.jpg","points" => 0],
            ["file" => "FindAGymnastWho.jpg","points" => 0],
            ["file" => "GymHQ Crossward Terms.jpg ","points" => 0],
            ["file" => "GymHQFullTurnChallenge.jpg","points" => 0],
            ["file" => "GymHQHandstandChallenge.jpg","points" => 0],
            ["file" => "GymHQPressHandstandChallenge.jpg","points" => 0],
            ["file" => "GymHQRoundOffChallenge.jpg","points" => 0],
            ["file" => "GymHQSplitChallenge.jpg","points" => 0],
            ["file" => "GymHQSwitchLeapChallenge.jpg","points" => 0],
            ["file" => "GymHQWordSearch.jpg","points" => 0],
            ["file" => "GymnasticsIsLifeColoringSheet.jpg","points" => 0],
            ["file" => "StrengthCourageColoringSheet.jpg","points" => 0],
            ["file" => "StrongGracefulDedicatedColoringSheet.jpg","points" => 0]
        ]);
    }
}
