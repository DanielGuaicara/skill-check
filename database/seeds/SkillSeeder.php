<?php

use App\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'id' => 1,
            'name' => 'Forward Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2,
            'name' => 'Backward Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 3,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 104,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 4,
            'name' => 'Handstand',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 5,
            'name' => 'Rope Climb',
            'event_id' => 112,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 6,
            'name' => '10 Push-Ups',
            'event_id' => 112,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 7,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 8,
            'name' => '3/4 Handstand',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 9,
            'name' => 'Back Handspring',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 10,
            'name' => 'Back Walkover',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 11,
            'name' => 'Bridge',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 12,
            'name' => 'Bridge Kickover',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 13,
            'name' => 'Cartwheel',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 14,
            'name' => 'Front Walkover',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 15,
            'name' => 'Front Handspring',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 16,
            'name' => 'Handstand Forward Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 17,
            'name' => 'Handstand to Bridge',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 18,
            'name' => 'Handstand to Vertical',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 19,
            'name' => 'Round-off',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 20,
            'name' => 'Round-off Back Handspring',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 21,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 22,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 23,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 24,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 25,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 26,
            'name' => 'Pike Jump',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 27,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 28,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 29,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 30,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 31,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 32,
            'name' => 'Stretch Jump',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 33,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 34,
            'name' => 'Tuck Jump',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 35,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 36,
            'name' => 'Wolf Jump',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 37,
            'name' => 'Aerial Cartwheel',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 38,
            'name' => 'Back Extension Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 39,
            'name' => 'Front Layout',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 40,
            'name' => 'Front Pike',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 41,
            'name' => 'Front Tuck',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 42,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 43,
            'name' => 'Round-off BHS Back Layout 1/1',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 44,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 45,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 46,
            'name' => 'Standing Back Tuck',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 47,
            'name' => 'Tuck Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 48,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 49,
            'name' => '1/1 Turn with Free Leg at Horizontal',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 50,
            'name' => 'Fouetté,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 51,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 52,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 53,
            'name' => 'Split Jump with 1/4 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 54,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 55,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 56,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 57,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 58,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 59,
            'name' => 'Switch Leg Leap',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 60,
            'name' => 'Tour Jeté,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 61,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 62,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 63,
            'name' => '3/4 Handstand',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 64,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 65,
            'name' => 'Bridge',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 66,
            'name' => 'Cartwheel',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 67,
            'name' => 'Forward Roll',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 68,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 69,
            'name' => 'Arabesque to 30°,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 70,
            'name' => 'Arabesque to 45°,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 71,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 72,
            'name' => 'Backward Swing Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 73,
            'name' => 'Forward Swing Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 74,
            'name' => 'Lever',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 75,
            'name' => 'Pivot Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 76,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 77,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 78,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 79,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 80,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 81,
            'name' => 'Stretch Jump',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 82,
            'name' => 'Tuck Jump',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 83,
            'name' => 'Wolf Jump',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 84,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 85,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 86,
            'name' => 'Round-off Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 87,
            'name' => 'Straddle Jump 1/1 (Popa)',
            'event_id' => 107,
            'description' => null,
            'level_id' => 4,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 88,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 89,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 90,
            'name' => 'Back Handspring',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 91,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 92,
            'name' => 'Back Walkover',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 93,
            'name' => 'Front Walkover',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 94,
            'name' => 'Round-off',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 95,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 96,
            'name' => '1/1 Turn with Free Leg at 45°,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 97,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 98,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 99,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 100,
            'name' => 'Pike Jump',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 101,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 102,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 103,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 104,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 105,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 106,
            'name' => 'Switch Leap',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 107,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 108,
            'name' => 'Back Tuck Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 109,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 110,
            'name' => 'Front Aerial Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 111,
            'name' => 'Front Handspring Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 112,
            'name' => 'Front Tuck Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 113,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 114,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 115,
            'name' => 'Cast',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 116,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 117,
            'name' => 'Cast to Horizontal',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 118,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 119,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 105,
            'description' => '',
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 120,
            'name' => 'Front Hip Circle',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 121,
            'name' => 'Glide',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 122,
            'name' => 'Leg Cut',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 123,
            'name' => 'Long Hang Kip',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 124,
            'name' => 'Long Hang Pullover',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 125,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 126,
            'name' => 'Single Leg Squat Through',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 127,
            'name' => 'Squat On',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 128,
            'name' => 'Tap Swing',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 129,
            'name' => 'Back Hip Circle',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 130,
            'name' => 'Flyaway Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 131,
            'name' => 'Kip',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 132,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 133,
            'name' => 'Pullover',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 134,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 135,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 136,
            'name' => 'Underswing Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 137,
            'name' => 'Back Giant',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 138,
            'name' => 'Backward Sole Circle',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 139,
            'name' => 'Backward Stalder Circle',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 140,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 141,
            'name' => 'Cast to Handstand',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 142,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 143,
            'name' => 'Clear Hip Circle',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 144,
            'name' => 'Overshoot (Bail)',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 145,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 146,
            'name' => 'Uprise',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 147,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 148,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 149,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 104,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 150,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 104,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 151,
            'name' => 'Handspring',
            'event_id' => 104,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 152,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 153,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 154,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 155,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 156,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 157,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 158,
            'name' => 'Tsukahara Tuck',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 159,
            'name' => 'Tsukahara Pike',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 160,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 161,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 162,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 104,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 163,
            'name' => 'Donkey Kick',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 164,
            'name' => 'Front Limber',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 165,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 166,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 167,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 105,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 168,
            'name' => 'Log Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 169,
            'name' => 'Straddle Forward Roll',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 170,
            'name' => 'Spiderman Handstand',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 171,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 172,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 173,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 174,
            'name' => 'Kick Walks',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 175,
            'name' => 'Front Scale',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 176,
            'name' => 'Back Scale',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 177,
            'name' => 'Arabesque to 30°,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 178,
            'name' => 'Arabesque to 45°,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 179,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 180,
            'name' => 'Crab Walk',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 181,
            'name' => 'Bear Walk',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 182,
            'name' => 'Cat Leap',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 183,
            'name' => 'Hitch Kick',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 184,
            'name' => 'Chassé,',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 185,
            'name' => 'Knee Scale',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 186,
            'name' => 'Front Scale',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 187,
            'name' => 'V-Sit',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 188,
            'name' => 'Back Scale',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 189,
            'name' => 'Squat Turn',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 190,
            'name' => 'Walk Forward',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 191,
            'name' => 'Walk Backward',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 192,
            'name' => 'Walk Sideways',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 193,
            'name' => 'Kicks Forward',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 194,
            'name' => 'Kicks Backward',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 195,
            'name' => 'Kicks Sidewards',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 196,
            'name' => 'Passé, Walks',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 197,
            'name' => 'Coupé, Walks',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 198,
            'name' => 'Dip Walks',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 199,
            'name' => 'Split Jump 1/1',
            'event_id' => 107,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 200,
            'name' => 'Needle Kick',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 201,
            'name' => 'Cartwheel on a Line',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 202,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 203,
            'name' => 'Handstand on a Line',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 204,
            'name' => 'Handstand on Low Beam',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 205,
            'name' => 'Forward Roll Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 206,
            'name' => 'Tuck Hang',
            'event_id' => 105,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 207,
            'name' => 'Straddle Hang',
            'event_id' => 105,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 208,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 105,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 209,
            'name' => 'Pike Hang',
            'event_id' => 105,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 210,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 104,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 211,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 104,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 212,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 104,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 213,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 104,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 214,
            'name' => 'Hurdle',
            'event_id' => 104,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 215,
            'name' => 'Straight Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 216,
            'name' => 'Straddle Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 217,
            'name' => 'Pike Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 218,
            'name' => 'Wolf Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 219,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 220,
            'name' => 'Split Jump',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 221,
            'name' => 'Round-Off',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 222,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 223,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 224,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 225,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 226,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 227,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 228,
            'name' => 'Back Handspring',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 229,
            'name' => 'Front Handspring',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 230,
            'name' => 'Bounder',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 231,
            'name' => 'Front Tuck',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 232,
            'name' => 'Back Tuck',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 233,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 234,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 235,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 236,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 237,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 238,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 239,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 240,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 241,
            'name' => 'Flexed Arm Hang',
            'event_id' => 112,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 242,
            'name' => 'Pull-Up',
            'event_id' => 112,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 243,
            'name' => '5 Chin-Ups',
            'event_id' => 112,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 244,
            'name' => 'Press Handstand',
            'event_id' => 112,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 245,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 246,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 247,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 248,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 249,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 250,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 106,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 251,
            'name' => 'Straddle Jump',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 252,
            'name' => 'Forward Giant',
            'event_id' => 105,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 253,
            'name' => 'Split Jump 1/2',
            'event_id' => 106,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 254,
            'name' => 'Split Leap',
            'event_id' => 107,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 255,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 104,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 256,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 104,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 257,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 113,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 258,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 113,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 259,
            'name' => 'Rope Climb without Legs',
            'event_id' => 112,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 260,
            'name' => 'Swivel Hips',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 261,
            'name' => 'Seat Drop',
            'event_id' => 113,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 262,
            'name' => 'Barani',
            'event_id' => 113,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 263,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 264,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 265,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 113,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 266,
            'name' => 'Straddle Jump with 135°, Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 267,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 112,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 268,
            'name' => 'Back Tuck',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 269,
            'name' => 'Jump to Front Support',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 270,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 271,
            'name' => 'Glide Swing to Stand',
            'event_id' => 105,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 272,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 106,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 273,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 105,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 274,
            'name' => 'Stretch Jump with 1 1/2 Turn',
            'event_id' => 107,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 275,
            'name' => 'Switch Leg Mount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 276,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 277,
            'name' => 'Switch Leap',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 278,
            'name' => 'Front Layout Dismount',
            'event_id' => 106,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 279,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 280,
            'name' => 'Scissors Forward',
            'event_id' => 108,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 281,
            'name' => 'Front Giant',
            'event_id' => 111,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 282,
            'name' => 'Tkachev',
            'event_id' => 105,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 283,
            'name' => '5 Push-Ups',
            'event_id' => 112,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 284,
            'name' => 'Pommel Skill',
            'event_id' => 108,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 285,
            'name' => 'Cartwheel',
            'event_id' => 114,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 286,
            'name' => 'Pop Cradle',
            'event_id' => 115,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 287,
            'name' => 'Bail to Handstand',
            'event_id' => 105,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 288,
            'name' => 'cast (push off dismount)',
            'event_id' => 105,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 289,
            'name' => 'Press to Handstand',
            'event_id' => 110,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 290,
            'name' => 'Flair',
            'event_id' => 108,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 291,
            'name' => 'Front Giant',
            'event_id' => 109,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 292,
            'name' => 'cast- sole cirlce dismount',
            'event_id' => 105,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 293,
            'name' => 'Spotter Tuck Jump',
            'event_id' => 116,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 294,
            'name' => 'Front Roll Tuck',
            'event_id' => 117,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 295,
            'name' => 'High V',
            'event_id' => 118,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 296,
            'name' => 'Toe Touch',
            'event_id' => 119,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 297,
            'name' => 'Right Hurdler',
            'event_id' => 119,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 298,
            'name' => 'Skip',
            'event_id' => 120,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 299,
            'name' => 'Left Split',
            'event_id' => 121,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 300,
            'name' => 'Yurchenko tuck',
            'event_id' => 104,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 301,
            'name' => 'Center Split',
            'event_id' => 121,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 302,
            'name' => 'Back Layout',
            'event_id' => 106,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 303,
            'name' => 'Switch Side Leap',
            'event_id' => 106,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 304,
            'name' => 'Right Split',
            'event_id' => 121,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 305,
            'name' => 'Back Tuck with 1/2 Turn',
            'event_id' => 113,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 306,
            'name' => 'Ring Swing',
            'event_id' => 124,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 307,
            'name' => 'Hop',
            'event_id' => 120,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 308,
            'name' => 'Jump',
            'event_id' => 120,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 309,
            'name' => 'Leg Lift',
            'event_id' => 125,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 310,
            'name' => 'Tuck Hang- Knees to Chest',
            'event_id' => 125,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 311,
            'name' => 'Pike Hang',
            'event_id' => 125,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 312,
            'name' => 'Straddle Hang',
            'event_id' => 125,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 313,
            'name' => 'Tour Jete',
            'event_id' => 122,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 314,
            'name' => 'V Up',
            'event_id' => 125,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 315,
            'name' => 'Grapevine',
            'event_id' => 106,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 316,
            'name' => 'Pull Up',
            'event_id' => 126,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 317,
            'name' => 'Elephant Walk',
            'event_id' => 107,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 318,
            'name' => 'Chin Up',
            'event_id' => 126,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 319,
            'name' => 'Leg Lift',
            'event_id' => 126,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 320,
            'name' => 'Play',
            'event_id' => 128,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 321,
            'name' => 'Roll',
            'event_id' => 128,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 322,
            'name' => 'Front Handspring',
            'event_id' => 114,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 323,
            'name' => 'Runway Sprints',
            'event_id' => 130,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 324,
            'name' => 'Jump with leg weights',
            'event_id' => 131,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 325,
            'name' => 'Spotter Straddle',
            'event_id' => 116,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 326,
            'name' => 'Front Lever',
            'event_id' => 114,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 327,
            'name' => 'Forward Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 328,
            'name' => 'Backward Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 329,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 132,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 330,
            'name' => 'Handstand',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 331,
            'name' => 'Rope Climb',
            'event_id' => 140,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 332,
            'name' => '10 Push-Ups',
            'event_id' => 140,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 333,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 334,
            'name' => '3/4 Handstand',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 335,
            'name' => 'Back Handspring',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 336,
            'name' => 'Back Walkover',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 337,
            'name' => 'Bridge',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 338,
            'name' => 'Bridge Kickover',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 339,
            'name' => 'Cartwheel',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 340,
            'name' => 'Front Walkover',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 341,
            'name' => 'Front Handspring',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 342,
            'name' => 'Handstand Forward Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 343,
            'name' => 'Handstand to Bridge',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 344,
            'name' => 'Handstand to Vertical',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 345,
            'name' => 'Round-off',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 346,
            'name' => 'Round-off Back Handspring',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 347,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 348,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 349,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 350,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 351,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 352,
            'name' => 'Pike Jump',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 353,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 354,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 355,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 356,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 357,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 358,
            'name' => 'Stretch Jump',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 359,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 360,
            'name' => 'Tuck Jump',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 361,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 362,
            'name' => 'Wolf Jump',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 363,
            'name' => 'Aerial Cartwheel',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 364,
            'name' => 'Back Extension Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 365,
            'name' => 'Front Layout',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 366,
            'name' => 'Front Pike',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 367,
            'name' => 'Front Tuck',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 368,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 369,
            'name' => 'Round-off BHS Back Layout 1/1',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 370,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 371,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 372,
            'name' => 'Standing Back Tuck',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 373,
            'name' => 'Tuck Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 374,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 375,
            'name' => '1/1 Turn with Free Leg at Horizontal',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 376,
            'name' => 'Fouetté,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 377,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 378,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 379,
            'name' => 'Split Jump with 1/4 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 380,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 381,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 382,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 383,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 384,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 385,
            'name' => 'Switch Leg Leap',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 386,
            'name' => 'Tour Jeté,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 387,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 388,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 389,
            'name' => '3/4 Handstand',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 390,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 391,
            'name' => 'Bridge',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 392,
            'name' => 'Cartwheel',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 393,
            'name' => 'Forward Roll',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 394,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 395,
            'name' => 'Arabesque to 30°,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 396,
            'name' => 'Arabesque to 45°,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 397,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 398,
            'name' => 'Backward Swing Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 399,
            'name' => 'Forward Swing Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 400,
            'name' => 'Lever',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 401,
            'name' => 'Pivot Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 402,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 403,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 404,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 405,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 406,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 407,
            'name' => 'Stretch Jump',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 408,
            'name' => 'Tuck Jump',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 409,
            'name' => 'Wolf Jump',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 410,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 411,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 412,
            'name' => 'Round-off Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 413,
            'name' => 'Straddle Jump 1/1 (Popa)',
            'event_id' => 135,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 414,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 415,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 416,
            'name' => 'Back Handspring',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 417,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 418,
            'name' => 'Back Walkover',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 419,
            'name' => 'Front Walkover',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 420,
            'name' => 'Round-off',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 421,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 422,
            'name' => '1/1 Turn with Free Leg at 45°,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 423,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 424,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 425,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 426,
            'name' => 'Pike Jump',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 427,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 428,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 429,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 430,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 431,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 432,
            'name' => 'Switch Leap',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 433,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 434,
            'name' => 'Back Tuck Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 435,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 436,
            'name' => 'Front Aerial Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 437,
            'name' => 'Front Handspring Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 438,
            'name' => 'Front Tuck Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 439,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 440,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 441,
            'name' => 'Cast',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 442,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 443,
            'name' => 'Cast to Horizontal',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 444,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 445,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 446,
            'name' => 'Front Hip Circle',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 447,
            'name' => 'Glide',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 448,
            'name' => 'Leg Cut',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 449,
            'name' => 'Long Hang Kip',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 450,
            'name' => 'Long Hang Pullover',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 451,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 452,
            'name' => 'Single Leg Squat Through',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 453,
            'name' => 'Squat On',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 454,
            'name' => 'Tap Swing',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 455,
            'name' => 'Back Hip Circle',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 456,
            'name' => 'Flyaway Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 457,
            'name' => 'Kip',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 458,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 459,
            'name' => 'Pullover',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 460,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 461,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 462,
            'name' => 'Underswing Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 463,
            'name' => 'Back Giant',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 464,
            'name' => 'Backward Sole Circle',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 465,
            'name' => 'Backward Stalder Circle',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 466,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 467,
            'name' => 'Cast to Handstand',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 468,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 469,
            'name' => 'Clear Hip Circle',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 470,
            'name' => 'Overshoot (Bail)',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 471,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 472,
            'name' => 'Uprise',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 473,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 474,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 475,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 132,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 476,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 132,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 477,
            'name' => 'Handspring',
            'event_id' => 132,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 478,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 479,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 480,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 481,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 482,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 483,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 484,
            'name' => 'Tsukahara Tuck',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 485,
            'name' => 'Tsukahara Pike',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 486,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 487,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 488,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 132,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 489,
            'name' => 'Donkey Kick',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 490,
            'name' => 'Front Limber',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 491,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 492,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 493,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 133,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 494,
            'name' => 'Log Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 495,
            'name' => 'Straddle Forward Roll',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 496,
            'name' => 'Spiderman Handstand',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 497,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 498,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 499,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 500,
            'name' => 'Kick Walks',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 501,
            'name' => 'Front Scale',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 502,
            'name' => 'Back Scale',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 503,
            'name' => 'Arabesque to 30°,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 504,
            'name' => 'Arabesque to 45°,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 505,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 506,
            'name' => 'Table',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 507,
            'name' => 'Crab Walk',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 508,
            'name' => 'Bear Walk',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 509,
            'name' => 'Cat Leap',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 510,
            'name' => 'Hitch Kick',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 511,
            'name' => 'Chassé,',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 512,
            'name' => 'Knee Scale',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 513,
            'name' => 'Front Scale',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 514,
            'name' => 'V-Sit',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 515,
            'name' => 'Back Scale',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 516,
            'name' => 'Squat Turn',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 517,
            'name' => 'Walk Forward',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 518,
            'name' => 'Walk Backward',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 519,
            'name' => 'Walk Sideways',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 520,
            'name' => 'Kicks Forward',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 521,
            'name' => 'Kicks Backward',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 522,
            'name' => 'Kicks Sidewards',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 523,
            'name' => 'Passé, Walks',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 524,
            'name' => 'Coupé, Walks',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 525,
            'name' => 'Dip Walks',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 526,
            'name' => 'Split Jump 1/1',
            'event_id' => 135,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 527,
            'name' => 'Needle Kick',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 528,
            'name' => 'Cartwheel on a Line',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 529,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 530,
            'name' => 'Handstand on a Line',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 531,
            'name' => 'Handstand on Low Beam',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 532,
            'name' => 'Forward Roll Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 533,
            'name' => 'Tuck Hang',
            'event_id' => 133,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 534,
            'name' => 'Straddle Hang',
            'event_id' => 133,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 535,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 133,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 536,
            'name' => 'Pike Hang',
            'event_id' => 133,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 537,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 132,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 538,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 132,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 539,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 132,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 540,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 132,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 541,
            'name' => 'Hurdle',
            'event_id' => 132,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 542,
            'name' => 'Straight Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 543,
            'name' => 'Straddle Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 544,
            'name' => 'Pike Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 545,
            'name' => 'Wolf Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 546,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 547,
            'name' => 'Split Jump',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 548,
            'name' => 'Round-Off',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 549,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 550,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 551,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 552,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 553,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 554,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 555,
            'name' => 'Back Handspring',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 556,
            'name' => 'Front Handspring',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 557,
            'name' => 'Bounder',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 558,
            'name' => 'Front Tuck',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 559,
            'name' => 'Back Tuck',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 560,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 561,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 562,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 563,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 564,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 565,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 566,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 567,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 568,
            'name' => 'Flexed Arm Hang',
            'event_id' => 140,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 569,
            'name' => 'Pull-Up',
            'event_id' => 140,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 570,
            'name' => 'Chin-Up',
            'event_id' => 140,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 571,
            'name' => 'Press Handstand',
            'event_id' => 140,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 572,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 573,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 574,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 575,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 576,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 577,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 134,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 578,
            'name' => 'Straddle Jump',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 579,
            'name' => 'Forward Giant',
            'event_id' => 133,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 580,
            'name' => 'Split Jump 1/2',
            'event_id' => 134,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 581,
            'name' => 'Split Leap',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 582,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 132,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 583,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 132,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 584,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 141,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 585,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 141,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 586,
            'name' => 'Rope Climb without Legs',
            'event_id' => 140,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 587,
            'name' => 'Swivel Hips',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 588,
            'name' => 'Donkey Kick',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 589,
            'name' => 'Seat Drop',
            'event_id' => 141,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 590,
            'name' => 'Barani',
            'event_id' => 141,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 591,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 592,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 593,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 141,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 594,
            'name' => 'Straddle Jump with 135°, Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 595,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 140,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 596,
            'name' => 'Back Tuck',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 597,
            'name' => 'Jump to Front Support',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 598,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 599,
            'name' => 'Glide Swing to Stand',
            'event_id' => 133,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 600,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 134,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 601,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 133,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 602,
            'name' => 'Stretch Jump with 1 1/2 Turn',
            'event_id' => 135,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 603,
            'name' => 'Switch Leg Mount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 604,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 605,
            'name' => 'Switch Leap',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 606,
            'name' => 'Front Layout Dismount',
            'event_id' => 134,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 607,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 608,
            'name' => 'Chasse',
            'event_id' => 135,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 609,
            'name' => 'Scissors Forward',
            'event_id' => 136,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 610,
            'name' => 'Front Giant',
            'event_id' => 139,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 611,
            'name' => 'HBar Skill',
            'event_id' => 139,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 612,
            'name' => 'Hbar Skill',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 613,
            'name' => '5 Push-Ups',
            'event_id' => 135,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 614,
            'name' => 'Pommel Skill',
            'event_id' => 136,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 615,
            'name' => 'Cartwheel',
            'event_id' => 142,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 616,
            'name' => 'Pop Cradle',
            'event_id' => 143,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 617,
            'name' => 'Forward Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 618,
            'name' => 'Backward Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 619,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 150,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 620,
            'name' => 'Handstand',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 621,
            'name' => 'Rope Climb',
            'event_id' => 158,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 622,
            'name' => '10 Push-Ups',
            'event_id' => 158,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 623,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 624,
            'name' => '3/4 Handstand',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 625,
            'name' => 'Back Handspring',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 626,
            'name' => 'Back Walkover',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 627,
            'name' => 'Bridge',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 628,
            'name' => 'Bridge Kickover',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 629,
            'name' => 'Cartwheel',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 630,
            'name' => 'Front Walkover',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 631,
            'name' => 'Front Handspring',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 632,
            'name' => 'Handstand Forward Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 633,
            'name' => 'Handstand to Bridge',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 634,
            'name' => 'Handstand to Vertical',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 635,
            'name' => 'Round-off',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 636,
            'name' => 'Round-off Back Handspring',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 637,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 638,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 639,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 640,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 641,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 642,
            'name' => 'Pike Jump',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 643,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 644,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 645,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 646,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 647,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 648,
            'name' => 'Stretch Jump',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 649,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 650,
            'name' => 'Tuck Jump',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 651,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 652,
            'name' => 'Wolf Jump',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 653,
            'name' => 'Aerial Cartwheel',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 654,
            'name' => 'Back Extension Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 655,
            'name' => 'Front Layout',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 656,
            'name' => 'Front Pike',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 657,
            'name' => 'Front Tuck',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 658,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 659,
            'name' => 'Round-off BHS Back Layout 1/1',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 660,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 661,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 662,
            'name' => 'Standing Back Tuck',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 663,
            'name' => 'Tuck Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 664,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 665,
            'name' => '1/1 Turn with Free Leg at Horizontal',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 666,
            'name' => 'Fouetté,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 667,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 668,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 669,
            'name' => 'Split Jump with 1/4 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 670,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 671,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 672,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 673,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 674,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 675,
            'name' => 'Switch Leg Leap',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 676,
            'name' => 'Tour Jeté,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 677,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 678,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 679,
            'name' => '3/4 Handstand',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 680,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 681,
            'name' => 'Bridge',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 682,
            'name' => 'Cartwheel',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 683,
            'name' => 'Forward Roll',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 684,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 685,
            'name' => 'Arabesque to 30°,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 686,
            'name' => 'Arabesque to 45°,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 687,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 688,
            'name' => 'Backward Swing Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 689,
            'name' => 'Forward Swing Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 690,
            'name' => 'Lever',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 691,
            'name' => 'Pivot Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 692,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 693,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 694,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 695,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 696,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 697,
            'name' => 'Stretch Jump',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 698,
            'name' => 'Tuck Jump',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 699,
            'name' => 'Wolf Jump',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 700,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 701,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 702,
            'name' => 'Round-off Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 703,
            'name' => 'Straddle Jump 1/1 (Popa)',
            'event_id' => 153,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 704,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 705,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 706,
            'name' => 'Back Handspring',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 707,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 708,
            'name' => 'Back Walkover',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 709,
            'name' => 'Front Walkover',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 710,
            'name' => 'Round-off',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 711,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 712,
            'name' => '1/1 Turn with Free Leg at 45°,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 713,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 714,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 715,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 716,
            'name' => 'Pike Jump',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 717,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 718,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 719,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 720,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 721,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 722,
            'name' => 'Switch Leap',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 723,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 724,
            'name' => 'Back Tuck Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 725,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 726,
            'name' => 'Front Aerial Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 727,
            'name' => 'Front Handspring Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 728,
            'name' => 'Front Tuck Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 729,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 730,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 731,
            'name' => 'Cast',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 732,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 733,
            'name' => 'Cast to Horizontal',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 734,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 735,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 736,
            'name' => 'Front Hip Circle',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 737,
            'name' => 'Glide',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 738,
            'name' => 'Leg Cut',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 739,
            'name' => 'Long Hang Kip',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 740,
            'name' => 'Long Hang Pullover',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 741,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 742,
            'name' => 'Single Leg Squat Through',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 743,
            'name' => 'Squat On',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 744,
            'name' => 'Tap Swing',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 745,
            'name' => 'Back Hip Circle',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 746,
            'name' => 'Flyaway Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 747,
            'name' => 'Kip',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 748,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 749,
            'name' => 'Pullover',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 750,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 751,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 752,
            'name' => 'Underswing Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 753,
            'name' => 'Back Giant',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 754,
            'name' => 'Backward Sole Circle',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 755,
            'name' => 'Backward Stalder Circle',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 756,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 757,
            'name' => 'Cast to Handstand',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 758,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 759,
            'name' => 'Clear Hip Circle',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 760,
            'name' => 'Overshoot (Bail)',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 761,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 762,
            'name' => 'Uprise',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 763,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 764,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 765,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 150,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 766,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 150,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 767,
            'name' => 'Handspring',
            'event_id' => 150,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 768,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 769,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 770,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 771,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 772,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 773,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 774,
            'name' => 'Tsukahara Tuck',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 775,
            'name' => 'Tsukahara Pike',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 776,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 777,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 778,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 779,
            'name' => 'Donkey Kick',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 780,
            'name' => 'Front Limber',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 781,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 782,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 783,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 151,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 784,
            'name' => 'Log Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 785,
            'name' => 'Straddle Forward Roll',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 786,
            'name' => 'Spiderman Handstand',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 787,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 788,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 789,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 790,
            'name' => 'Kick Walks',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 791,
            'name' => 'Front Scale',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 792,
            'name' => 'Back Scale',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 793,
            'name' => 'Arabesque to 30°,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 794,
            'name' => 'Arabesque to 45°,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 795,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 796,
            'name' => 'Table',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 797,
            'name' => 'Crab Walk',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 798,
            'name' => 'Bear Walk',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 799,
            'name' => 'Cat Leap',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 800,
            'name' => 'Hitch Kick',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 801,
            'name' => 'Chassé,',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 802,
            'name' => 'Knee Scale',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 803,
            'name' => 'Front Scale',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 804,
            'name' => 'V-Sit',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 805,
            'name' => 'Back Scale',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 806,
            'name' => 'Squat Turn',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 807,
            'name' => 'Walk Forward',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 808,
            'name' => 'Walk Backward',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 809,
            'name' => 'Walk Sideways',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 810,
            'name' => 'Kicks Forward',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 811,
            'name' => 'Kicks Backward',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 812,
            'name' => 'Kicks Sidewards',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 813,
            'name' => 'Passé, Walks',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 814,
            'name' => 'Coupé, Walks',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 815,
            'name' => 'Dip Walks',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 816,
            'name' => 'Split Jump 1/1',
            'event_id' => 153,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 817,
            'name' => 'Needle Kick',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 818,
            'name' => 'Cartwheel on a Line',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 819,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 820,
            'name' => 'Handstand on a Line',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 821,
            'name' => 'Handstand on Low Beam',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 822,
            'name' => 'Forward Roll Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 823,
            'name' => 'Tuck Hang',
            'event_id' => 151,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 824,
            'name' => 'Straddle Hang',
            'event_id' => 151,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 825,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 151,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 826,
            'name' => 'Pike Hang',
            'event_id' => 151,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 827,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 150,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 828,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 150,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 829,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 150,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 830,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 150,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 831,
            'name' => 'Hurdle',
            'event_id' => 150,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 832,
            'name' => 'Straight Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 833,
            'name' => 'Straddle Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 834,
            'name' => 'Pike Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 835,
            'name' => 'Wolf Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 836,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 837,
            'name' => 'Split Jump',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 838,
            'name' => 'Round-Off',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 839,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 840,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 841,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 842,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 843,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 844,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 845,
            'name' => 'Back Handspring',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 846,
            'name' => 'Front Handspring',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 847,
            'name' => 'Bounder',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 848,
            'name' => 'Front Tuck',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 849,
            'name' => 'Back Tuck',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 850,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 851,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 852,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 853,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 854,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 855,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 856,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 857,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 858,
            'name' => 'Flexed Arm Hang',
            'event_id' => 158,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 859,
            'name' => 'Pull-Up',
            'event_id' => 158,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 860,
            'name' => 'Chin-Up',
            'event_id' => 158,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 861,
            'name' => 'Press Handstand',
            'event_id' => 158,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 862,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 863,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 864,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 865,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 866,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 867,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 152,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 868,
            'name' => 'Straddle Jump',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 869,
            'name' => 'Forward Giant',
            'event_id' => 151,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 870,
            'name' => 'Split Jump 1/2',
            'event_id' => 152,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 871,
            'name' => 'Split Leap',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 872,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 873,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 150,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 874,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 875,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 876,
            'name' => 'Rope Climb without Legs',
            'event_id' => 158,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 877,
            'name' => 'Swivel Hips',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 878,
            'name' => 'Donkey Kick',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 879,
            'name' => 'Seat Drop',
            'event_id' => 159,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 880,
            'name' => 'Barani',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 881,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 882,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 883,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 159,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 884,
            'name' => 'Straddle Jump with 135°, Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 885,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 158,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 886,
            'name' => 'Back Tuck',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 887,
            'name' => 'Jump to Front Support',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 888,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 889,
            'name' => 'Glide Swing to Stand',
            'event_id' => 151,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 890,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 152,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 891,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 151,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 892,
            'name' => 'Stretch Jump with 1 1/2 Turn',
            'event_id' => 153,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 893,
            'name' => 'Switch Leg Mount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 894,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 895,
            'name' => 'Switch Leap',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 896,
            'name' => 'Front Layout Dismount',
            'event_id' => 152,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 897,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 898,
            'name' => 'Chasse',
            'event_id' => 153,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 899,
            'name' => 'Scissors Forward',
            'event_id' => 154,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 900,
            'name' => 'Front Giant',
            'event_id' => 157,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 901,
            'name' => 'HBar Skill',
            'event_id' => 157,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 902,
            'name' => 'Hbar Skill',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 903,
            'name' => '5 Push-Ups',
            'event_id' => 153,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 904,
            'name' => 'Pommel Skill',
            'event_id' => 154,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 905,
            'name' => 'Cartwheel',
            'event_id' => 160,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 906,
            'name' => 'Pop Cradle',
            'event_id' => 161,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 907,
            'name' => 'Win it min it push ups',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 908,
            'name' => 'win it minute froggy jumps',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 909,
            'name' => 'Win-It-Minute pushups',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 910,
            'name' => 'Win-It-Minute V-ups',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 911,
            'name' => 'Win-It-Minute froggy jumps',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 912,
            'name' => 'Ivri anochi full song',
            'event_id' => 158,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 913,
            'name' => 'Forward Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 914,
            'name' => 'Backward Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 915,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 1,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 916,
            'name' => 'Handstand',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 917,
            'name' => 'Rope Climb',
            'event_id' => 9,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 918,
            'name' => '10 Push-Ups',
            'event_id' => 9,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 919,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 920,
            'name' => '3/4 Handstand',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 921,
            'name' => 'Back Handspring',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 922,
            'name' => 'Back Walkover',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 923,
            'name' => 'Bridge',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 924,
            'name' => 'Bridge Kickover',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 925,
            'name' => 'Cartwheel',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 926,
            'name' => 'Front Walkover',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 927,
            'name' => 'Front Handspring',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 928,
            'name' => 'Handstand Forward Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 929,
            'name' => 'Handstand to Bridge',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 930,
            'name' => 'Handstand to Vertical',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 931,
            'name' => 'Round-off',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 932,
            'name' => 'Round-off Back Handspring',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 933,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 934,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 935,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 936,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 937,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 938,
            'name' => 'Pike Jump',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 939,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 940,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 941,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 942,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 943,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 944,
            'name' => 'Stretch Jump',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 945,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 946,
            'name' => 'Tuck Jump',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 947,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 948,
            'name' => 'Wolf Jump',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 949,
            'name' => 'Aerial Cartwheel',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 950,
            'name' => 'Back Extension Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 951,
            'name' => 'Front Layout',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 952,
            'name' => 'Front Pike',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 953,
            'name' => 'Front Tuck',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 954,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 955,
            'name' => 'Round-off BHS Back Layout 1/1',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 956,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 957,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 958,
            'name' => 'Standing Back Tuck',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 959,
            'name' => 'Tuck Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 960,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 961,
            'name' => '1/1 Turn with Free Leg at Horizontal',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 962,
            'name' => 'Fouetté,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 963,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 964,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 965,
            'name' => 'Split Jump with 1/4 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 966,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 967,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 968,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 969,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 970,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 971,
            'name' => 'Switch Leg Leap',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 972,
            'name' => 'Tour Jeté,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 973,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 974,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 975,
            'name' => '3/4 Handstand',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 976,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 977,
            'name' => 'Bridge',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 978,
            'name' => 'Cartwheel',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 979,
            'name' => 'Forward Roll',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 980,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 981,
            'name' => 'Arabesque to 30°,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 982,
            'name' => 'Arabesque to 45°,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 983,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 984,
            'name' => 'Backward Swing Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 985,
            'name' => 'Forward Swing Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 986,
            'name' => 'Lever',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 987,
            'name' => 'Pivot Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 988,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 989,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 990,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 991,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 992,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 993,
            'name' => 'Stretch Jump',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 994,
            'name' => 'Tuck Jump',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 995,
            'name' => 'Wolf Jump',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 996,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 997,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 998,
            'name' => 'Round-off Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 999,
            'name' => 'Straddle Jump 1/1 (Popa)',
            'event_id' => 4,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1000,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1001,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1002,
            'name' => 'Back Handspring',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1003,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1004,
            'name' => 'Back Walkover',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1005,
            'name' => 'Front Walkover',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1006,
            'name' => 'Round-off',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1007,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1008,
            'name' => '1/1 Turn with Free Leg at 45°,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1009,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1010,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1011,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1012,
            'name' => 'Pike Jump',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1013,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1014,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1015,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1016,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1017,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1018,
            'name' => 'Switch Leap',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1019,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1020,
            'name' => 'Back Tuck Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1021,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1022,
            'name' => 'Front Aerial Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1023,
            'name' => 'Front Handspring Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1024,
            'name' => 'Front Tuck Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1025,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1026,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1027,
            'name' => 'Cast',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1028,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1029,
            'name' => 'Cast to Horizontal',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1030,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1031,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1032,
            'name' => 'Front Hip Circle',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1033,
            'name' => 'Glide',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1034,
            'name' => 'Leg Cut',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1035,
            'name' => 'Long Hang Kip',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1036,
            'name' => 'Long Hang Pullover',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1037,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1038,
            'name' => 'Single Leg Squat Through',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1039,
            'name' => 'Squat On',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1040,
            'name' => 'Tap Swing',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1041,
            'name' => 'Back Hip Circle',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1042,
            'name' => 'Flyaway Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1043,
            'name' => 'Kip',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1044,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1045,
            'name' => 'Pullover',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1046,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1047,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1048,
            'name' => 'Underswing Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1049,
            'name' => 'Back Giant',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1050,
            'name' => 'Backward Sole Circle',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1051,
            'name' => 'Backward Stalder Circle',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1052,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1053,
            'name' => 'Cast to Handstand',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1054,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1055,
            'name' => 'Clear Hip Circle',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1056,
            'name' => 'Overshoot (Bail)',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1057,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1058,
            'name' => 'Uprise',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1059,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1060,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1061,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 1,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1062,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 1,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1063,
            'name' => 'Handspring',
            'event_id' => 1,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1064,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1065,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1066,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1067,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1068,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1069,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1070,
            'name' => 'Tsukahara Tuck',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1071,
            'name' => 'Tsukahara Pike',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1072,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1073,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1074,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 1,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1075,
            'name' => 'Donkey Kick',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1076,
            'name' => 'Front Limber',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1077,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1078,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1079,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 2,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1080,
            'name' => 'Log Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1081,
            'name' => 'Straddle Forward Roll',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1082,
            'name' => 'Spiderman Handstand',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1083,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1084,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1085,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1086,
            'name' => 'Kick Walks',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1087,
            'name' => 'Front Scale',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1088,
            'name' => 'Back Scale',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1089,
            'name' => 'Arabesque to 30°,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1090,
            'name' => 'Arabesque to 45°,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1091,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1092,
            'name' => 'Table',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1093,
            'name' => 'Crab Walk',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1094,
            'name' => 'Bear Walk',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1095,
            'name' => 'Cat Leap',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1096,
            'name' => 'Hitch Kick',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1097,
            'name' => 'Chassé,',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1098,
            'name' => 'Knee Scale',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1099,
            'name' => 'Front Scale',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1100,
            'name' => 'V-Sit',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1101,
            'name' => 'Back Scale',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1102,
            'name' => 'Squat Turn',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1103,
            'name' => 'Walk Forward',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1104,
            'name' => 'Walk Backward',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1105,
            'name' => 'Walk Sideways',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1106,
            'name' => 'Kicks Forward',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1107,
            'name' => 'Kicks Backward',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1108,
            'name' => 'Kicks Sidewards',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1109,
            'name' => 'Passé, Walks',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1110,
            'name' => 'Coupé, Walks',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1111,
            'name' => 'Dip Walks',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1112,
            'name' => 'Split Jump 1/1',
            'event_id' => 4,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1113,
            'name' => 'Needle Kick',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1114,
            'name' => 'Cartwheel on a Line',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1115,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1116,
            'name' => 'Handstand on a Line',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1117,
            'name' => 'Handstand on Low Beam',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1118,
            'name' => 'Forward Roll Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1119,
            'name' => 'Tuck Hang',
            'event_id' => 2,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1120,
            'name' => 'Straddle Hang',
            'event_id' => 2,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1121,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 2,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1122,
            'name' => 'Pike Hang',
            'event_id' => 2,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1123,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 1,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1124,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 1,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1125,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 1,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1126,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 1,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1127,
            'name' => 'Hurdle',
            'event_id' => 1,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1128,
            'name' => 'Straight Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1129,
            'name' => 'Straddle Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1130,
            'name' => 'Pike Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1131,
            'name' => 'Wolf Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1132,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1133,
            'name' => 'Split Jump',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1134,
            'name' => 'Round-Off',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1135,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1136,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1137,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1138,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1139,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1140,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1141,
            'name' => 'Back Handspring',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1142,
            'name' => 'Front Handspring',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1143,
            'name' => 'Bounder',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1144,
            'name' => 'Front Tuck',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1145,
            'name' => 'Back Tuck',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1146,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1147,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1148,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1149,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1150,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1151,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1152,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1153,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1154,
            'name' => 'Flexed Arm Hang',
            'event_id' => 9,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1155,
            'name' => 'Pull-Up',
            'event_id' => 9,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1156,
            'name' => 'Chin-Up',
            'event_id' => 9,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1157,
            'name' => 'Press Handstand',
            'event_id' => 9,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1158,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1159,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1160,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1161,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1162,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1163,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 3,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1164,
            'name' => 'Straddle Jump',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1165,
            'name' => 'Forward Giant',
            'event_id' => 2,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1166,
            'name' => 'Split Jump 1/2',
            'event_id' => 3,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1167,
            'name' => 'Split Leap',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1168,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 1,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1169,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 1,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1170,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 10,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1171,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 10,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1172,
            'name' => 'Rope Climb without Legs',
            'event_id' => 9,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1173,
            'name' => 'Swivel Hips',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1174,
            'name' => 'Donkey Kick',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1175,
            'name' => 'Seat Drop',
            'event_id' => 10,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1176,
            'name' => 'Barani',
            'event_id' => 10,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1177,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1178,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1179,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 10,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1180,
            'name' => 'Straddle Jump with 135°, Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1181,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 9,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1182,
            'name' => 'Back Tuck',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1183,
            'name' => 'Jump to Front Support',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1184,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1185,
            'name' => 'Glide Swing to Stand',
            'event_id' => 2,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1186,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 3,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1187,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 2,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1188,
            'name' => 'Stretch Jump with 1 1/2 Turn',
            'event_id' => 4,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1189,
            'name' => 'Switch Leg Mount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1190,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1191,
            'name' => 'Switch Leap',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1192,
            'name' => 'Front Layout Dismount',
            'event_id' => 3,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1193,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 4,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1194,
            'name' => 'Chasse',
            'event_id' => 4,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1195,
            'name' => 'Scissors Forward',
            'event_id' => 5,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1196,
            'name' => 'Front Giant',
            'event_id' => 5,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1197,
            'name' => 'HBar Skill',
            'event_id' => 5,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1198,
            'name' => 'Hbar Skill',
            'event_id' => 5,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1199,
            'name' => '5 Push-Ups',
            'event_id' => 5,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1200,
            'name' => 'Pommel Skill',
            'event_id' => 5,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1201,
            'name' => 'Cartwheel',
            'event_id' => 11,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1202,
            'name' => 'Pop Cradle',
            'event_id' => 12,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1203,
            'name' => 'Handstand Hold',
            'event_id' => 9,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1204,
            'name' => 'Cast to Handstands',
            'event_id' => 9,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1205,
            'name' => 'Leg Lifts',
            'event_id' => 9,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1206,
            'name' => 'Flexibility Testing',
            'event_id' => 9,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1207,
            'name' => 'Handstands- 30-60 second hold',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1208,
            'name' => 'Press Handstands- 10',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1209,
            'name' => 'Cast to Handstand - 5',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1210,
            'name' => 'Leg Lifts- 20 Half Leg Lifts',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1211,
            'name' => 'Flexibility Testing 6 Ballistic Kicks',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1212,
            'name' => 'Rope Climb- 12 ft climb with feet in L Hold',
            'event_id' => 19,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1213,
            'name' => 'Forward Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1214,
            'name' => 'Backward Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1215,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 20,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1216,
            'name' => 'Handstand',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1217,
            'name' => 'Rope Climb',
            'event_id' => 28,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1218,
            'name' => '10 Push-Ups',
            'event_id' => 28,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1219,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1220,
            'name' => '3/4 Handstand',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1221,
            'name' => 'Back Handspring',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1222,
            'name' => 'Back Walkover',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1223,
            'name' => 'Bridge',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1224,
            'name' => 'Bridge Kickover',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1225,
            'name' => 'Cartwheel',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1226,
            'name' => 'Front Walkover',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1227,
            'name' => 'Front Handspring',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1228,
            'name' => 'Handstand Forward Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1229,
            'name' => 'Handstand to Bridge',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1230,
            'name' => 'Handstand to Vertical',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1231,
            'name' => 'Round-off',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1232,
            'name' => 'Round-off Back Handspring',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1233,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1234,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1235,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1236,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1237,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1238,
            'name' => 'Pike Jump',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1239,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1240,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1241,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1242,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1243,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1244,
            'name' => 'Stretch Jump',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1245,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1246,
            'name' => 'Tuck Jump',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1247,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1248,
            'name' => 'Wolf Jump',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1249,
            'name' => 'Aerial Cartwheel',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1250,
            'name' => 'Back Extension Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1251,
            'name' => 'Front Layout (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1252,
            'name' => 'Front Pike (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1253,
            'name' => 'Front Tuck',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1254,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1255,
            'name' => 'Round-off BHS Back Layout 1/1 (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1256,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1257,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1258,
            'name' => 'Standing Back Tuck',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1259,
            'name' => 'Tuck Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1260,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1261,
            'name' => '1/1 Turn with Free Leg at Horizontal (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1262,
            'name' => 'Fouetté,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1263,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1264,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1265,
            'name' => 'Split Jump with 1/4 Turn (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1266,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1267,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1268,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1269,
            'name' => 'Straddle Jump with 180°, Split (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1270,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1271,
            'name' => 'Switch Leg Leap (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1272,
            'name' => 'Tour Jeté, (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1273,
            'name' => 'Tuck Jump with 1/1 Turn (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1274,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1275,
            'name' => '3/4 Handstand',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1276,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1277,
            'name' => 'Bridge',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1278,
            'name' => 'Cartwheel',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1279,
            'name' => 'Forward Roll',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1280,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1281,
            'name' => 'Arabesque to 30°,',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1282,
            'name' => 'Arabesque to 45°,',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1283,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1284,
            'name' => 'Backward Swing Turn',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1285,
            'name' => 'Forward Swing Turn',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1286,
            'name' => 'Lever',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1287,
            'name' => 'Pivot Turn',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1288,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1289,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1290,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1291,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1292,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1293,
            'name' => 'Stretch Jump',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1294,
            'name' => 'Tuck Jump',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1295,
            'name' => 'Wolf Jump',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1296,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1297,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1298,
            'name' => 'Round-off Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1299,
            'name' => 'Straddle Jump 1/1 (Popa) (C)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1300,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1301,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1302,
            'name' => 'Back Handspring (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1303,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1304,
            'name' => 'Back Walkover',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1305,
            'name' => 'Front Walkover',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1306,
            'name' => 'Round-off',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1307,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1308,
            'name' => '1/1 Turn with Free Leg at 45°,(B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1309,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1310,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1311,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1312,
            'name' => 'Pike Jump (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1313,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1314,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1315,
            'name' => 'Split Jump with 180°, Split (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1316,
            'name' => 'Straddle Jump with 180°, Split (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1317,
            'name' => 'Stretch Jump with 3/4 Turn (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1318,
            'name' => 'Switch Leap (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1319,
            'name' => 'Tuck Jump with 1/2 Turn (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1320,
            'name' => 'Back Tuck Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1321,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1322,
            'name' => 'Front Aerial Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1323,
            'name' => 'Front Handspring Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1324,
            'name' => 'Front Tuck Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1325,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1326,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1327,
            'name' => 'Cast',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1328,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1329,
            'name' => 'Cast to Horizontal',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1330,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1331,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1332,
            'name' => 'Front Hip Circle',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1333,
            'name' => 'Glide',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1334,
            'name' => 'Leg Cut',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1335,
            'name' => 'Long Hang Kip',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1336,
            'name' => 'Long Hang Pullover',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1337,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1338,
            'name' => 'Single Leg Squat Through',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1339,
            'name' => 'Squat On',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1340,
            'name' => 'Tap Swing',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1341,
            'name' => 'Back Hip Circle',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1342,
            'name' => 'Flyaway Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1343,
            'name' => 'Kip',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1344,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1345,
            'name' => 'Pullover',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1346,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1347,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1348,
            'name' => 'Underswing Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1349,
            'name' => 'Back Giant (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1350,
            'name' => 'Backward Sole Circle (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1351,
            'name' => 'Backward Stalder Circle (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1352,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1353,
            'name' => 'Cast to Handstand (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1354,
            'name' => 'Cast to Handstand 180°, Pirouette (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1355,
            'name' => 'Clear Hip Circle (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1356,
            'name' => 'Overshoot (Bail) (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1357,
            'name' => 'Straddle Back over Low Bar (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1358,
            'name' => 'Uprise (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1359,
            'name' => 'Flyaway Dismount with 1/1 Twist (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1360,
            'name' => 'Flyaway Dismount with 1/2 Twist (B)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1361,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 20,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1362,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 20,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1363,
            'name' => 'Handspring',
            'event_id' => 20,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1364,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1365,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1366,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1367,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1368,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1369,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1370,
            'name' => 'Tsukahara Tuck',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1371,
            'name' => 'Tsukahara Pike',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1372,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1373,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1374,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 20,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1375,
            'name' => 'Donkey Kick',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1376,
            'name' => 'Front Limber',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1377,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1378,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1379,
            'name' => 'Clear Hip Circle to Handstand (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1380,
            'name' => 'Log Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1381,
            'name' => 'Straddle Forward Roll',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1382,
            'name' => 'Spiderman Handstand',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1383,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1384,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1385,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1386,
            'name' => 'Kick Walks',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1387,
            'name' => 'Front Scale',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1388,
            'name' => 'Back Scale',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1389,
            'name' => 'Arabesque to 30°,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1390,
            'name' => 'Arabesque to 45°,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1391,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1392,
            'name' => 'Crab Walk',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1393,
            'name' => 'Bear Walk',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1394,
            'name' => 'Cat Leap',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1395,
            'name' => 'Hitch Kick',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1396,
            'name' => 'Chassé,',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1397,
            'name' => 'Knee Scale',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1398,
            'name' => 'Front Scale',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1399,
            'name' => 'V-Sit',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1400,
            'name' => 'Back Scale',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1401,
            'name' => 'Squat Turn',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1402,
            'name' => 'Walk Forward',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1403,
            'name' => 'Walk Backward',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1404,
            'name' => 'Walk Sideways',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1405,
            'name' => 'Kicks Forward',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1406,
            'name' => 'Kicks Backward',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1407,
            'name' => 'Kicks Sidewards',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1408,
            'name' => 'Passé, Walks',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1409,
            'name' => 'Coupé, Walks',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1410,
            'name' => 'Dip Walks',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1411,
            'name' => 'Split Jump 1/1 (C)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1412,
            'name' => 'Needle Kick',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1413,
            'name' => 'Cartwheel on a Line',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1414,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1415,
            'name' => 'Handstand on a Line',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1416,
            'name' => 'Handstand on Low Beam',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1417,
            'name' => 'Forward Roll Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1418,
            'name' => 'Tuck Hang',
            'event_id' => 21,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1419,
            'name' => 'Straddle Hang',
            'event_id' => 21,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1420,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1421,
            'name' => 'Pike Hang',
            'event_id' => 21,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1422,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 20,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1423,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 20,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1424,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 20,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1425,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 20,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1426,
            'name' => 'Hurdle',
            'event_id' => 20,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1427,
            'name' => 'Straight Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1428,
            'name' => 'Straddle Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1429,
            'name' => 'Pike Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1430,
            'name' => 'Wolf Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1431,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1432,
            'name' => 'Split Jump',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1433,
            'name' => 'Round-Off',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1434,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1435,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1436,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1437,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1438,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1439,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1440,
            'name' => 'Back Handspring',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1441,
            'name' => 'Front Handspring',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1442,
            'name' => 'Bounder',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1443,
            'name' => 'Front Tuck',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1444,
            'name' => 'Back Tuck',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1445,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1446,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1447,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1448,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1449,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1450,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1451,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1452,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1453,
            'name' => 'Flexed Arm Hang',
            'event_id' => 28,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1454,
            'name' => 'Pull-Up',
            'event_id' => 28,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1455,
            'name' => '5 Chin-Ups',
            'event_id' => 28,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1456,
            'name' => 'Press Handstand',
            'event_id' => 28,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1457,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1458,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1459,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1460,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1461,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1462,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 22,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1463,
            'name' => 'Straddle Jump',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1464,
            'name' => 'Forward Giant (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1465,
            'name' => 'Split Jump 1/2 (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1466,
            'name' => 'Split Leap',
            'event_id' => 23,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1467,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 20,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1468,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 20,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1469,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 29,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1470,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 29,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1471,
            'name' => 'Rope Climb without Legs',
            'event_id' => 28,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1472,
            'name' => 'Swivel Hips',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1473,
            'name' => 'Seat Drop',
            'event_id' => 29,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1474,
            'name' => 'Barani',
            'event_id' => 29,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1475,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1476,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1477,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 29,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1478,
            'name' => 'Straddle Jump with 135°, Split (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1479,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 28,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1480,
            'name' => 'Back Tuck',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1481,
            'name' => 'Jump to Front Support',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1482,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1483,
            'name' => 'Glide Swing to Stand',
            'event_id' => 21,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1484,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 22,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1485,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 21,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1486,
            'name' => 'Stretch Jump with 1 1/2 Turn (B)',
            'event_id' => 23,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1487,
            'name' => 'Switch Leg Mount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1488,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1489,
            'name' => 'Switch Leap (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1490,
            'name' => 'Front Layout Dismount (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1491,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 23,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1492,
            'name' => 'Scissors Forward',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1493,
            'name' => 'Front Giant',
            'event_id' => 27,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1494,
            'name' => 'Tkachev (D)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1495,
            'name' => '5 Push-Ups',
            'event_id' => 28,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1496,
            'name' => 'Pommel Skill',
            'event_id' => 24,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1497,
            'name' => 'Cartwheel',
            'event_id' => 30,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1498,
            'name' => 'Pop Cradle',
            'event_id' => 31,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1499,
            'name' => 'Bail to Handstand (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1500,
            'name' => 'cast (push off dismount)',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1501,
            'name' => 'Press to Handstand',
            'event_id' => 26,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1502,
            'name' => 'Flair',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1503,
            'name' => 'Front Giant',
            'event_id' => 25,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1504,
            'name' => 'cast- sole cirlce dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1505,
            'name' => 'Spotter Tuck Jump',
            'event_id' => 32,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1506,
            'name' => 'Front Roll Tuck',
            'event_id' => 33,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1507,
            'name' => 'High V',
            'event_id' => 171,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1508,
            'name' => 'Toe Touch',
            'event_id' => 174,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1509,
            'name' => 'Right Hurdler',
            'event_id' => 174,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1510,
            'name' => 'Skip',
            'event_id' => 172,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1511,
            'name' => 'Left Split',
            'event_id' => 173,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1512,
            'name' => 'Yurchenko tuck',
            'event_id' => 20,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1513,
            'name' => 'Center Split',
            'event_id' => 173,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1514,
            'name' => 'Back Layout (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1515,
            'name' => 'Switch Side Leap (D)',
            'event_id' => 22,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1516,
            'name' => 'Right Split',
            'event_id' => 173,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1517,
            'name' => 'Back Tuck with 1/2 Turn',
            'event_id' => 29,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1518,
            'name' => 'Ring Swing',
            'event_id' => 170,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1519,
            'name' => 'Hop',
            'event_id' => 172,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1520,
            'name' => 'Jump',
            'event_id' => 172,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1521,
            'name' => 'Leg Lift',
            'event_id' => 169,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1522,
            'name' => 'Tuck Hang- Knees to Chest',
            'event_id' => 169,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1523,
            'name' => 'Pike Hang',
            'event_id' => 169,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1524,
            'name' => 'Straddle Hang',
            'event_id' => 169,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1525,
            'name' => 'Tour Jete',
            'event_id' => 175,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1526,
            'name' => 'V Up',
            'event_id' => 169,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1527,
            'name' => 'Grapevine',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1528,
            'name' => 'Pull Up',
            'event_id' => 168,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1529,
            'name' => 'Tap Swing with Re-grip',
            'event_id' => 27,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1530,
            'name' => 'Pullover',
            'event_id' => 27,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1531,
            'name' => 'Cast hips off bar',
            'event_id' => 27,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1532,
            'name' => 'L-sit (3 seconds)',
            'event_id' => 25,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1533,
            'name' => 'Chin up',
            'event_id' => 25,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1534,
            'name' => 'Support Swings',
            'event_id' => 26,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1535,
            'name' => 'Under bar swings',
            'event_id' => 26,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1536,
            'name' => 'walk on hands end to end',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1537,
            'name' => 'Leg cut forward',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1538,
            'name' => 'Leg cut backward',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1539,
            'name' => 'Walking circles on mushroom',
            'event_id' => 24,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1540,
            'name' => '3 Pull-Ups',
            'event_id' => 28,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1541,
            'name' => 'Double Back Dismount',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1542,
            'name' => 'Jaeger',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1543,
            'name' => 'Pak Salto',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1544,
            'name' => 'Toe Shoot (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1545,
            'name' => 'Giant 1/1 (D)',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1546,
            'name' => 'Stalder forward to Handstand (C)',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1547,
            'name' => 'Front Handspring (B)',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1548,
            'name' => 'Front Aerial (D)',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1549,
            'name' => 'Back Tuck (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1550,
            'name' => 'Aerial (D)',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1551,
            'name' => 'Back Layout Stepout (C)',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1552,
            'name' => 'Back Layout with 1 and 1/2 Twist (C)',
            'event_id' => 23,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1553,
            'name' => 'Yurchenko Layout',
            'event_id' => 20,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1554,
            'name' => 'Blind Change to Forward Giant',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1555,
            'name' => 'Hop Grip Change to Forward Giant',
            'event_id' => 21,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1556,
            'name' => 'Back handspring back handspring connected',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1557,
            'name' => 'Switch Leap Back Tuck',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1558,
            'name' => 'Gainer pike off the end',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1559,
            'name' => 'Front layout front pike connected',
            'event_id' => 23,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1560,
            'name' => 'Back layout 1 &1/2 Front Tuck connected',
            'event_id' => 23,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1561,
            'name' => 'Switch Ring',
            'event_id' => 23,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1562,
            'name' => 'Switch Half',
            'event_id' => 23,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1563,
            'name' => 'Back handspring back tuck connected',
            'event_id' => 22,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1564,
            'name' => 'Forward Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1565,
            'name' => 'Backward Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1566,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 34,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1567,
            'name' => 'Handstand',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1568,
            'name' => 'Rope Climb',
            'event_id' => 42,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1569,
            'name' => '10 Push-Ups',
            'event_id' => 42,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1570,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1571,
            'name' => '3/4 Handstand',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1572,
            'name' => 'Back Handspring',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1573,
            'name' => 'Back Walkover',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1574,
            'name' => 'Bridge',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1575,
            'name' => 'Bridge Kickover',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1576,
            'name' => 'Cartwheel',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1577,
            'name' => 'Front Walkover',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1578,
            'name' => 'Front Handspring',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1579,
            'name' => 'Handstand Forward Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1580,
            'name' => 'Handstand to Bridge',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1581,
            'name' => 'Handstand to Vertical',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1582,
            'name' => 'Round-off',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1583,
            'name' => 'Round-off Back Handspring',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1584,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1585,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1586,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1587,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1588,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1589,
            'name' => 'Pike Jump',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1590,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1591,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1592,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1593,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1594,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1595,
            'name' => 'Stretch Jump',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1596,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1597,
            'name' => 'Tuck Jump',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1598,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1599,
            'name' => 'Wolf Jump',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1600,
            'name' => 'Aerial Cartwheel',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1601,
            'name' => 'Back Extension Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1602,
            'name' => 'Front Layout (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1603,
            'name' => 'Front Pike (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1604,
            'name' => 'Front Tuck',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1605,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1606,
            'name' => 'Round-off BHS Back Layout 1/1 (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1607,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1608,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1609,
            'name' => 'Standing Back Tuck',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1610,
            'name' => 'Tuck Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1611,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1612,
            'name' => '1/1 Turn with Free Leg at Horizontal (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1613,
            'name' => 'Fouetté,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1614,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1615,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1616,
            'name' => 'Split Jump with 1/4 Turn (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1617,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1618,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1619,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1620,
            'name' => 'Straddle Jump with 180°, Split (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1621,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1622,
            'name' => 'Switch Leg Leap (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1623,
            'name' => 'Tour Jeté, (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1624,
            'name' => 'Tuck Jump with 1/1 Turn (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1625,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1626,
            'name' => '3/4 Handstand',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1627,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1628,
            'name' => 'Bridge',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1629,
            'name' => 'Cartwheel',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1630,
            'name' => 'Forward Roll',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1631,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1632,
            'name' => 'Arabesque to 30°,',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1633,
            'name' => 'Arabesque to 45°,',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1634,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1635,
            'name' => 'Backward Swing Turn',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1636,
            'name' => 'Forward Swing Turn',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1637,
            'name' => 'Lever',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1638,
            'name' => 'Pivot Turn',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1639,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1640,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1641,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1642,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1643,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1644,
            'name' => 'Stretch Jump',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1645,
            'name' => 'Tuck Jump',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1646,
            'name' => 'Wolf Jump',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1647,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1648,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1649,
            'name' => 'Round-off Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1650,
            'name' => 'Straddle Jump 1/1 (Popa) (C)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1651,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1652,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1653,
            'name' => 'Back Handspring (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1654,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1655,
            'name' => 'Back Walkover',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1656,
            'name' => 'Front Walkover',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1657,
            'name' => 'Round-off',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1658,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1659,
            'name' => '1/1 Turn with Free Leg at 45°,(B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1660,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1661,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1662,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1663,
            'name' => 'Pike Jump (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1664,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1665,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1666,
            'name' => 'Split Jump with 180°, Split (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1667,
            'name' => 'Straddle Jump with 180°, Split (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1668,
            'name' => 'Stretch Jump with 3/4 Turn (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1669,
            'name' => 'Switch Leap (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1670,
            'name' => 'Tuck Jump with 1/2 Turn (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1671,
            'name' => 'Back Tuck Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1672,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1673,
            'name' => 'Front Aerial Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1674,
            'name' => 'Front Handspring Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1675,
            'name' => 'Front Tuck Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1676,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1677,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1678,
            'name' => 'Cast',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1679,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1680,
            'name' => 'Cast to Horizontal',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1681,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1682,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1683,
            'name' => 'Front Hip Circle',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1684,
            'name' => 'Glide',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1685,
            'name' => 'Leg Cut',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1686,
            'name' => 'Long Hang Kip',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1687,
            'name' => 'Long Hang Pullover',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1688,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1689,
            'name' => 'Single Leg Squat Through',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1690,
            'name' => 'Squat On',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1691,
            'name' => 'Tap Swing',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1692,
            'name' => 'Back Hip Circle',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1693,
            'name' => 'Flyaway Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1694,
            'name' => 'Kip',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1695,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1696,
            'name' => 'Pullover',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1697,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1698,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1699,
            'name' => 'Underswing Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1700,
            'name' => 'Back Giant (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1701,
            'name' => 'Backward Sole Circle (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1702,
            'name' => 'Backward Stalder Circle (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1703,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1704,
            'name' => 'Cast to Handstand (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1705,
            'name' => 'Cast to Handstand 180°, Pirouette (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1706,
            'name' => 'Clear Hip Circle (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1707,
            'name' => 'Overshoot (Bail) (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1708,
            'name' => 'Straddle Back over Low Bar (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1709,
            'name' => 'Uprise (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1710,
            'name' => 'Flyaway Dismount with 1/1 Twist (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1711,
            'name' => 'Flyaway Dismount with 1/2 Twist (B)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1712,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 34,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1713,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 34,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1714,
            'name' => 'Handspring',
            'event_id' => 34,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1715,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1716,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1717,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1718,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1719,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1720,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1721,
            'name' => 'Tsukahara Tuck',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1722,
            'name' => 'Tsukahara Pike',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1723,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1724,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1725,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 34,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1726,
            'name' => 'Donkey Kick',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1727,
            'name' => 'Front Limber',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1728,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1729,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1730,
            'name' => 'Clear Hip Circle to Handstand (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1731,
            'name' => 'Log Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1732,
            'name' => 'Straddle Forward Roll',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1733,
            'name' => 'Spiderman Handstand',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1734,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1735,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1736,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1737,
            'name' => 'Kick Walks',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1738,
            'name' => 'Front Scale',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1739,
            'name' => 'Back Scale',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1740,
            'name' => 'Arabesque to 30°,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1741,
            'name' => 'Arabesque to 45°,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1742,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1743,
            'name' => 'Crab Walk',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1744,
            'name' => 'Bear Walk',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1745,
            'name' => 'Cat Leap',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1746,
            'name' => 'Hitch Kick',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1747,
            'name' => 'Chassé,',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1748,
            'name' => 'Knee Scale',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1749,
            'name' => 'Front Scale',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1750,
            'name' => 'V-Sit',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1751,
            'name' => 'Back Scale',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1752,
            'name' => 'Squat Turn',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1753,
            'name' => 'Walk Forward',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1754,
            'name' => 'Walk Backward',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1755,
            'name' => 'Walk Sideways',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1756,
            'name' => 'Kicks Forward',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1757,
            'name' => 'Kicks Backward',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1758,
            'name' => 'Kicks Sidewards',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1759,
            'name' => 'Passé, Walks',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1760,
            'name' => 'Coupé, Walks',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1761,
            'name' => 'Dip Walks',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1762,
            'name' => 'Split Jump 1/1 (C)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1763,
            'name' => 'Needle Kick',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1764,
            'name' => 'Cartwheel on a Line',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1765,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1766,
            'name' => 'Handstand on a Line',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1767,
            'name' => 'Handstand on Low Beam',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1768,
            'name' => 'Forward Roll Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1769,
            'name' => 'Tuck Hang',
            'event_id' => 35,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1770,
            'name' => 'Straddle Hang',
            'event_id' => 35,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1771,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1772,
            'name' => 'Pike Hang',
            'event_id' => 35,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1773,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 34,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1774,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 34,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1775,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 34,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1776,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 34,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1777,
            'name' => 'Hurdle',
            'event_id' => 34,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1778,
            'name' => 'Straight Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1779,
            'name' => 'Straddle Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1780,
            'name' => 'Pike Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1781,
            'name' => 'Wolf Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1782,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1783,
            'name' => 'Split Jump',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1784,
            'name' => 'Round-Off',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1785,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1786,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1787,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1788,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1789,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1790,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1791,
            'name' => 'Back Handspring',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1792,
            'name' => 'Front Handspring',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1793,
            'name' => 'Bounder',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1794,
            'name' => 'Front Tuck',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1795,
            'name' => 'Back Tuck',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1796,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1797,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1798,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1799,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1800,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1801,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1802,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1803,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1804,
            'name' => 'Flexed Arm Hang',
            'event_id' => 42,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1805,
            'name' => 'Pull-Up',
            'event_id' => 42,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1806,
            'name' => '5 Chin-Ups',
            'event_id' => 42,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1807,
            'name' => 'Press Handstand',
            'event_id' => 42,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1808,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1809,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1810,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1811,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1812,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1813,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 36,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1814,
            'name' => 'Straddle Jump',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1815,
            'name' => 'Forward Giant (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1816,
            'name' => 'Split Jump 1/2 (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1817,
            'name' => 'Split Leap',
            'event_id' => 37,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1818,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 34,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1819,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 34,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1820,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 43,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1821,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 43,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1822,
            'name' => 'Rope Climb without Legs',
            'event_id' => 42,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1823,
            'name' => 'Swivel Hips',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1824,
            'name' => 'Seat Drop',
            'event_id' => 43,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1825,
            'name' => 'Barani',
            'event_id' => 43,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1826,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1827,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1828,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 43,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1829,
            'name' => 'Straddle Jump with 135°, Split (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1830,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 42,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1831,
            'name' => 'Back Tuck',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1832,
            'name' => 'Jump to Front Support',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1833,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1834,
            'name' => 'Glide Swing to Stand',
            'event_id' => 35,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1835,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 36,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1836,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 35,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1837,
            'name' => 'Stretch Jump with 1 1/2 Turn (B)',
            'event_id' => 37,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1838,
            'name' => 'Switch Leg Mount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1839,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1840,
            'name' => 'Switch Leap (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1841,
            'name' => 'Front Layout Dismount (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1842,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 37,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1843,
            'name' => 'Scissors Forward',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1844,
            'name' => 'Front Giant',
            'event_id' => 41,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1845,
            'name' => 'Tkachev (D)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1846,
            'name' => '5 Push-Ups',
            'event_id' => 42,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1847,
            'name' => 'Pommel Skill',
            'event_id' => 38,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1848,
            'name' => 'Cartwheel',
            'event_id' => 44,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1849,
            'name' => 'Pop Cradle',
            'event_id' => 45,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1850,
            'name' => 'Bail to Handstand (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1851,
            'name' => 'cast (push off dismount)',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1852,
            'name' => 'Press to Handstand',
            'event_id' => 40,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1853,
            'name' => 'Flair',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1854,
            'name' => 'Front Giant',
            'event_id' => 39,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1855,
            'name' => 'cast- sole cirlce dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1856,
            'name' => 'Spotter Tuck Jump',
            'event_id' => 46,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1857,
            'name' => 'Front Roll Tuck',
            'event_id' => 47,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1858,
            'name' => 'High V',
            'event_id' => 181,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1859,
            'name' => 'Toe Touch',
            'event_id' => 177,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1860,
            'name' => 'Right Hurdler',
            'event_id' => 177,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1861,
            'name' => 'Skip',
            'event_id' => 176,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1862,
            'name' => 'Left Split',
            'event_id' => 179,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1863,
            'name' => 'Yurchenko tuck',
            'event_id' => 34,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1864,
            'name' => 'Center Split',
            'event_id' => 179,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1865,
            'name' => 'Back Layout (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1866,
            'name' => 'Switch Side Leap (D)',
            'event_id' => 36,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1867,
            'name' => 'Right Split',
            'event_id' => 179,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1868,
            'name' => 'Back Tuck with 1/2 Turn',
            'event_id' => 43,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1869,
            'name' => 'Ring Swing',
            'event_id' => 180,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1870,
            'name' => 'Hop',
            'event_id' => 176,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1871,
            'name' => 'Jump',
            'event_id' => 176,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1872,
            'name' => 'Leg Lift',
            'event_id' => 178,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1873,
            'name' => 'Tuck Hang- Knees to Chest',
            'event_id' => 178,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1874,
            'name' => 'Pike Hang',
            'event_id' => 178,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1875,
            'name' => 'Straddle Hang',
            'event_id' => 178,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1876,
            'name' => 'Tour Jete',
            'event_id' => 182,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1877,
            'name' => 'V Up',
            'event_id' => 178,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1878,
            'name' => 'Grapevine',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1879,
            'name' => 'Pull Up',
            'event_id' => 183,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1880,
            'name' => 'Tap Swing with Re-grip',
            'event_id' => 41,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1881,
            'name' => 'Pullover',
            'event_id' => 41,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1882,
            'name' => 'Cast hips off bar',
            'event_id' => 41,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1883,
            'name' => 'L-sit (3 seconds)',
            'event_id' => 39,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1884,
            'name' => 'Chin up',
            'event_id' => 39,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1885,
            'name' => 'Support Swings',
            'event_id' => 40,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1886,
            'name' => 'Under bar swings',
            'event_id' => 40,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1887,
            'name' => 'walk on hands end to end',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1888,
            'name' => 'Leg cut forward',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1889,
            'name' => 'Leg cut backward',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1890,
            'name' => 'Walking circles on mushroom',
            'event_id' => 38,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1891,
            'name' => '3 Pull-Ups',
            'event_id' => 42,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1892,
            'name' => 'Double Back Dismount',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1893,
            'name' => 'Jaeger',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1894,
            'name' => 'Pak Salto',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1895,
            'name' => 'Toe Shoot (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1896,
            'name' => 'Giant 1/1 (D)',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1897,
            'name' => 'Stalder forward to Handstand (C)',
            'event_id' => 35,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1898,
            'name' => 'Front Handspring (B)',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1899,
            'name' => 'Front Aerial (D)',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1900,
            'name' => 'Back Tuck (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1901,
            'name' => 'Aerial (D)',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1902,
            'name' => 'Back Layout Stepout (C)',
            'event_id' => 36,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1903,
            'name' => 'Back Layout with 1 and 1/2 Twist (C)',
            'event_id' => 37,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1904,
            'name' => 'Forward Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1905,
            'name' => 'Backward Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1906,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 48,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1907,
            'name' => 'Handstand',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1908,
            'name' => 'Rope Climb',
            'event_id' => 56,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1909,
            'name' => '10 Push-Ups',
            'event_id' => 56,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1910,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1911,
            'name' => '3/4 Handstand',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1912,
            'name' => 'Back Handspring',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1913,
            'name' => 'Back Walkover',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1914,
            'name' => 'Bridge',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1915,
            'name' => 'Bridge Kickover',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1916,
            'name' => 'Cartwheel',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1917,
            'name' => 'Front Walkover',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1918,
            'name' => 'Front Handspring',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1919,
            'name' => 'Handstand Forward Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1920,
            'name' => 'Handstand to Bridge',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1921,
            'name' => 'Handstand to Vertical',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1922,
            'name' => 'Round-off',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1923,
            'name' => 'Round-off Back Handspring',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1924,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1925,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1926,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1927,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1928,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1929,
            'name' => 'Pike Jump',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1930,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1931,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1932,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1933,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1934,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1935,
            'name' => 'Stretch Jump',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1936,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1937,
            'name' => 'Tuck Jump',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1938,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1939,
            'name' => 'Wolf Jump',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1940,
            'name' => 'Aerial Cartwheel',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1941,
            'name' => 'Back Extension Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1942,
            'name' => 'Front Layout',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1943,
            'name' => 'Front Pike',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1944,
            'name' => 'Front Tuck',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1945,
            'name' => 'Round-off BHS Back Layout',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1946,
            'name' => 'Round-off BHS Back Layout 1/1',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1947,
            'name' => 'Round-off BHS Back Pike',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1948,
            'name' => 'Round-off BHS Back Tuck',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1949,
            'name' => 'Standing Back Tuck',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1950,
            'name' => 'Tuck Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1951,
            'name' => '1 and 1/2 Turn on One Foot',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1952,
            'name' => '1/1 Turn with Free Leg at Horizontal',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1953,
            'name' => 'Fouetté,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1954,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1955,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1956,
            'name' => 'Split Jump with 1/4 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1957,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1958,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1959,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1960,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1961,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1962,
            'name' => 'Switch Leg Leap',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1963,
            'name' => 'Tour Jeté,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1964,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1965,
            'name' => 'Wolf Jump with 1/2 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1966,
            'name' => '3/4 Handstand',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1967,
            'name' => 'Backward Shoulder Roll',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1968,
            'name' => 'Bridge',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1969,
            'name' => 'Cartwheel',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1970,
            'name' => 'Forward Roll',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1971,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1972,
            'name' => 'Arabesque to 30°,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1973,
            'name' => 'Arabesque to 45°,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1974,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1975,
            'name' => 'Backward Swing Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1976,
            'name' => 'Forward Swing Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1977,
            'name' => 'Lever',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1978,
            'name' => 'Pivot Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1979,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1980,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1981,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1982,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1983,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1984,
            'name' => 'Stretch Jump',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1985,
            'name' => 'Tuck Jump',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1986,
            'name' => 'Wolf Jump',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1987,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1988,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1989,
            'name' => 'Round-off Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1990,
            'name' => 'Straddle Jump 1/1 (Popa)',
            'event_id' => 50,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1991,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1992,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1993,
            'name' => 'Back Handspring',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1994,
            'name' => 'Back Roll to 3/4 Handstand',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 1995,
            'name' => 'Back Walkover',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1996,
            'name' => 'Front Walkover',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1997,
            'name' => 'Round-off',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1998,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 1999,
            'name' => '1/1 Turn with Free Leg at 45°,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2000,
            'name' => 'Arabesque to Above Horizontal',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2001,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2002,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2003,
            'name' => 'Pike Jump',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2004,
            'name' => 'Sissone with 180°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2005,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2006,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2007,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2008,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2009,
            'name' => 'Switch Leap',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2010,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2011,
            'name' => 'Back Tuck Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2012,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2013,
            'name' => 'Front Aerial Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2014,
            'name' => 'Front Handspring Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2015,
            'name' => 'Front Tuck Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2016,
            'name' => 'Gainer off the Side Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2017,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2018,
            'name' => 'Cast',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2019,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2020,
            'name' => 'Cast to Horizontal',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2021,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2022,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2023,
            'name' => 'Front Hip Circle',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2024,
            'name' => 'Glide',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2025,
            'name' => 'Leg Cut',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2026,
            'name' => 'Long Hang Kip',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2027,
            'name' => 'Long Hang Pullover',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2028,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2029,
            'name' => 'Single Leg Squat Through',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2030,
            'name' => 'Squat On',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2031,
            'name' => 'Tap Swing',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2032,
            'name' => 'Back Hip Circle',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2033,
            'name' => 'Flyaway Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2034,
            'name' => 'Kip',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2035,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2036,
            'name' => 'Pullover',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2037,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2038,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2039,
            'name' => 'Underswing Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2040,
            'name' => 'Back Giant',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2041,
            'name' => 'Backward Sole Circle',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2042,
            'name' => 'Backward Stalder Circle',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2043,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2044,
            'name' => 'Cast to Handstand',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2045,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2046,
            'name' => 'Clear Hip Circle',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2047,
            'name' => 'Overshoot (Bail)',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2048,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2049,
            'name' => 'Uprise',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2050,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2051,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2052,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 48,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2053,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 48,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2054,
            'name' => 'Handspring',
            'event_id' => 48,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2055,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2056,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2057,
            'name' => '1/4 to 1/2 Twist On, Repulsion Off',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2058,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2059,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2060,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2061,
            'name' => 'Tsukahara Tuck',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2062,
            'name' => 'Tsukahara Pike',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2063,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2064,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2065,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 48,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2066,
            'name' => 'Donkey Kick',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2067,
            'name' => 'Front Limber',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2068,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2069,
            'name' => 'Straddle Jump Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2070,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 49,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2071,
            'name' => 'Log Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2072,
            'name' => 'Straddle Forward Roll',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2073,
            'name' => 'Spiderman Handstand',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2074,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2075,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2076,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2077,
            'name' => 'Kick Walks',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2078,
            'name' => 'Front Scale',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2079,
            'name' => 'Back Scale',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2080,
            'name' => 'Arabesque to 30°,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2081,
            'name' => 'Arabesque to 45°,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2082,
            'name' => 'Arabesque to Horizontal',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2083,
            'name' => 'Table',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2084,
            'name' => 'Crab Walk',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2085,
            'name' => 'Bear Walk',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2086,
            'name' => 'Cat Leap',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2087,
            'name' => 'Hitch Kick',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2088,
            'name' => 'Chassé,',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2089,
            'name' => 'Knee Scale',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2090,
            'name' => 'Front Scale',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2091,
            'name' => 'V-Sit',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2092,
            'name' => 'Back Scale',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2093,
            'name' => 'Squat Turn',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2094,
            'name' => 'Walk Forward',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2095,
            'name' => 'Walk Backward',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2096,
            'name' => 'Walk Sideways',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2097,
            'name' => 'Kicks Forward',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2098,
            'name' => 'Kicks Backward',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2099,
            'name' => 'Kicks Sidewards',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2100,
            'name' => 'Passé, Walks',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2101,
            'name' => 'Coupé, Walks',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2102,
            'name' => 'Dip Walks',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2103,
            'name' => 'Split Jump 1/1',
            'event_id' => 51,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2104,
            'name' => 'Needle Kick',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2105,
            'name' => 'Cartwheel on a Line',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2106,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2107,
            'name' => 'Handstand on a Line',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2108,
            'name' => 'Handstand on Low Beam',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2109,
            'name' => 'Forward Roll Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2110,
            'name' => 'Tuck Hang',
            'event_id' => 49,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2111,
            'name' => 'Straddle Hang',
            'event_id' => 49,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2112,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 49,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2113,
            'name' => 'Pike Hang',
            'event_id' => 49,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2114,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 48,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2115,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 48,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2116,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 48,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2117,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 48,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2118,
            'name' => 'Hurdle',
            'event_id' => 48,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2119,
            'name' => 'Straight Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2120,
            'name' => 'Straddle Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2121,
            'name' => 'Pike Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2122,
            'name' => 'Wolf Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2123,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2124,
            'name' => 'Split Jump',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2125,
            'name' => 'Round-Off',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2126,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2127,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2128,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2129,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2130,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2131,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2132,
            'name' => 'Back Handspring',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2133,
            'name' => 'Front Handspring',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2134,
            'name' => 'Bounder',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2135,
            'name' => 'Front Tuck',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2136,
            'name' => 'Back Tuck',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2137,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2138,
            'name' => 'Front Handspring Front Tuck',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2139,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2140,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2141,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2142,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2143,
            'name' => 'Round-off Back Handspring Back Layout',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2144,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2145,
            'name' => 'Flexed Arm Hang',
            'event_id' => 56,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2146,
            'name' => 'Pull-Up',
            'event_id' => 56,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2147,
            'name' => 'Chin-Up',
            'event_id' => 56,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2148,
            'name' => 'Press Handstand',
            'event_id' => 56,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2149,
            'name' => 'Stretch Jump Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2150,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2151,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2152,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2153,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2154,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 50,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2155,
            'name' => 'Straddle Jump',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2156,
            'name' => 'Forward Giant',
            'event_id' => 49,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2157,
            'name' => 'Split Jump 1/2',
            'event_id' => 50,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2158,
            'name' => 'Split Leap',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2159,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 48,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2160,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 48,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2161,
            'name' => 'Front Handspring Front Layout 1/1',
            'event_id' => 57,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2162,
            'name' => 'Round-off Back Handspring Back Layout 2/1',
            'event_id' => 57,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2163,
            'name' => 'Rope Climb without Legs',
            'event_id' => 57,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2164,
            'name' => 'Swivel Hips',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2165,
            'name' => 'Donkey Kick',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2166,
            'name' => 'Seat Drop',
            'event_id' => 57,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2167,
            'name' => 'Barani',
            'event_id' => 57,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2168,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2169,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2170,
            'name' => 'Round-off Back Handspring Back Layout 1/1',
            'event_id' => 57,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2171,
            'name' => 'Straddle Jump with 135°, Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2172,
            'name' => 'Handstand Hold 1 Min',
            'event_id' => 56,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2173,
            'name' => 'Back Tuck',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2174,
            'name' => 'Jump to Front Support',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2175,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2176,
            'name' => 'Glide Swing to Stand',
            'event_id' => 49,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2177,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 50,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2178,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 49,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2179,
            'name' => 'Stretch Jump with 1 1/2 Turn',
            'event_id' => 51,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2180,
            'name' => 'Switch Leg Mount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2181,
            'name' => 'Jump to Tuck Stand Mount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2182,
            'name' => 'Switch Leap',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2183,
            'name' => 'Front Layout Dismount',
            'event_id' => 50,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2184,
            'name' => 'Switch Leap with 120Â° Split',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2185,
            'name' => 'Chasse',
            'event_id' => 51,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2186,
            'name' => 'Scissors Forward',
            'event_id' => 52,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2187,
            'name' => 'Front Giant',
            'event_id' => 55,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2188,
            'name' => 'HBar Skill',
            'event_id' => 55,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2189,
            'name' => 'Hbar Skill',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2190,
            'name' => '5 Push-Ups',
            'event_id' => 51,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2191,
            'name' => 'Pommel Skill',
            'event_id' => 52,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2192,
            'name' => 'Cartwheel',
            'event_id' => 58,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2193,
            'name' => 'Pop Cradle',
            'event_id' => 59,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2194,
            'name' => 'Run in Place for 1 Minute',
            'event_id' => 65,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2195,
            'name' => '5 Jumping Jacks',
            'event_id' => 65,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2196,
            'name' => '10 Jumps in a Row',
            'event_id' => 65,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2197,
            'name' => 'Gallop',
            'event_id' => 65,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2198,
            'name' => 'Straight Body',
            'event_id' => 69,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2199,
            'name' => 'Tuck',
            'event_id' => 69,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2200,
            'name' => 'Pike',
            'event_id' => 69,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2201,
            'name' => 'Straddle',
            'event_id' => 69,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2202,
            'name' => 'Table',
            'event_id' => 69,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2203,
            'name' => '5 Donkey Kicks in a Row',
            'event_id' => 66,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2204,
            'name' => '5 Needle Scales in a Row',
            'event_id' => 66,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2205,
            'name' => 'Lunge, Teeter Totter, Lunge',
            'event_id' => 66,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2206,
            'name' => 'Spider Crawl up Wall to Straight Legs',
            'event_id' => 66,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2207,
            'name' => 'Monkey Jump',
            'event_id' => 67,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2208,
            'name' => 'Lung, Monkey Jump, Lunge',
            'event_id' => 67,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2209,
            'name' => 'Lunge, Monkey Jump and Land on 1 Foot',
            'event_id' => 67,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2210,
            'name' => 'Cartwheel over Raised Object',
            'event_id' => 67,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2211,
            'name' => 'Log Roll',
            'event_id' => 68,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2212,
            'name' => 'Rock and Roll',
            'event_id' => 68,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2213,
            'name' => 'Forward Roll',
            'event_id' => 68,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2214,
            'name' => 'Candlestick',
            'event_id' => 68,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2215,
            'name' => 'Stretch Jump',
            'event_id' => 63,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2216,
            'name' => 'Tuck Jump',
            'event_id' => 63,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2217,
            'name' => 'Straddle Jump',
            'event_id' => 63,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2218,
            'name' => 'Jump 1/2 Twist',
            'event_id' => 63,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2219,
            'name' => 'Long Jump',
            'event_id' => 63,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2220,
            'name' => 'Prone Hold with ABCs',
            'event_id' => 56,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2221,
            'name' => 'Boat Hold for 10 seconds',
            'event_id' => 56,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2222,
            'name' => 'Bicycle Legs for 30 seconds',
            'event_id' => 56,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2223,
            'name' => 'Superman for 5 seconds',
            'event_id' => 56,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2224,
            'name' => 'Run in Place for 1 Minute',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2225,
            'name' => '5 Jumping Jacks',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2226,
            'name' => 'Gallop',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2227,
            'name' => '10 Jumps in a Row',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2228,
            'name' => 'Straight Body',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2229,
            'name' => 'Tuck',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2230,
            'name' => 'Straddle',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2231,
            'name' => 'Pike',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2232,
            'name' => 'Table',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2233,
            'name' => 'Lunge',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2234,
            'name' => 'Jump 1/2 Twist',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2235,
            'name' => 'Long Jump',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2236,
            'name' => 'Straddle (45 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2237,
            'name' => 'Stretch Jump',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2238,
            'name' => 'Tuck Jump',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2239,
            'name' => '5 Donkey Kicks in a Row',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2240,
            'name' => '5 Needle Scales in a Row',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2241,
            'name' => 'Lunge, Teeter-Totter, Lunge',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2242,
            'name' => 'Spider Crawl up Wall to Straight Legs',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2243,
            'name' => 'Cartwheel over Raised Object',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2244,
            'name' => 'Lung, Monkey Jump, Lunge',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2245,
            'name' => 'Lunge, Monkey Jump and Land on 1 Foot',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2246,
            'name' => 'Monkey Jump',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2247,
            'name' => 'Candlestick',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2248,
            'name' => 'Forward Roll',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2249,
            'name' => 'Log Roll',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2250,
            'name' => 'Rock and Roll',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2251,
            'name' => 'Prone Hold with ABCs',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2252,
            'name' => 'Boat Hold for 10 seconds',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2253,
            'name' => 'Superman for 5 seconds',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2254,
            'name' => 'Bicycle Legs for 30 seconds',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2255,
            'name' => 'Lunge, Monkey Jump, Lunge',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2256,
            'name' => 'Run in Place for 1 minute',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2257,
            'name' => 'Run in Place (30 sec. high knees & 30 sec.)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2258,
            'name' => 'High Knees (30 seconds)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2259,
            'name' => 'Heel Kickers (30 seconds)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2260,
            'name' => '10 Jumping Jacks',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2261,
            'name' => 'Ski Jumps (front to back)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2262,
            'name' => 'Ski Jumps (side to side)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2263,
            'name' => '5 Hops on Each Leg',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2264,
            'name' => 'Jump Rope (1 minute)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2265,
            'name' => 'Windmills (30 sec)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2266,
            'name' => 'Jack and Jills (30 sec)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2267,
            'name' => 'Criss Cross (30 sec)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2268,
            'name' => 'Jump Rope Backwards',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2269,
            'name' => 'Jump Rope Backwards (1 minute)',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2270,
            'name' => '4 point Jumping Jacks',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2271,
            'name' => 'Running Man',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2272,
            'name' => 'Stationary Hop Scotch',
            'event_id' => 71,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2273,
            'name' => 'Prone Hold on Elbows (30 sec)',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2274,
            'name' => '5 Crunches',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2275,
            'name' => '10 Half Squats',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2276,
            'name' => '5x Arabesque Kicks from Kneel',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2277,
            'name' => 'Arch Hold (10 sec)',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2278,
            'name' => '5 Push Ups (from knees)',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2279,
            'name' => '5 Sit Ups',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2280,
            'name' => '10 Full Squats',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2281,
            'name' => '5x Front Kicks on each leg from Back',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2282,
            'name' => '5x Side Kicks each leg from Side',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2283,
            'name' => '10 Arch Ups',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2284,
            'name' => '5 Push Ups',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2285,
            'name' => '5 V-Ups',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2286,
            'name' => '5 Burpees',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2287,
            'name' => '5 Forward Kicks on Each Leg from Stand',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2288,
            'name' => '5 Arabesque Kicks on Each Leg from Stand',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2289,
            'name' => '5 Side Kicks on Each Leg from Stand',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2290,
            'name' => '10 Arch Rockers',
            'event_id' => 83,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2291,
            'name' => '30 sec. Straight Body Releve Hold',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2292,
            'name' => '10 sec. Split Shape Holds (right and left)',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2293,
            'name' => '10 sec. Middle Split Shape Hold',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2294,
            'name' => '10 sec. Bridge Hold',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2295,
            'name' => '15 sec. Releve Hold on each leg',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2296,
            'name' => '30 sec. Split Hold (right and left)',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2297,
            'name' => '30 sec. Split Hold (middle)',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2298,
            'name' => '10sec. Bridge Hold with Straight Arms & Legs',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2299,
            'name' => 'Full Split Right Side',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2300,
            'name' => 'Full Split Left Side',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2301,
            'name' => 'Full Split Middle',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2302,
            'name' => '10 sec. Bridge with Vertical Leg Hold',
            'event_id' => 72,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2303,
            'name' => 'Jump 1/1 Twist',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2304,
            'name' => 'Stretch Jump with Pointed Toes',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2305,
            'name' => 'Straddle Jump (90 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2306,
            'name' => 'Straddle Jump (120 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2307,
            'name' => 'Split Jump on each side (90 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2308,
            'name' => 'Tuck Jump with 1/2 Twist',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2309,
            'name' => 'Sissone',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2310,
            'name' => 'Assemble',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2311,
            'name' => 'Straddle Jump (180 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2312,
            'name' => 'Split Jump on each side (150 degrees)',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2313,
            'name' => 'Step to Leap',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2314,
            'name' => 'Pike Jump',
            'event_id' => 78,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2315,
            'name' => 'Spider Crawl up Wall to Full Handstand',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2316,
            'name' => 'Lunge, 3/4 Split Handstand, Lunge',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2317,
            'name' => 'Kick to Handstand Against Wall',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2318,
            'name' => '30sec. Handstand Hold(belly to against wall)',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2319,
            'name' => '30 sec. Handstand Hold (back against wall)',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2320,
            'name' => '3 sec. Split Handstand Hold',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2321,
            'name' => '3 sec. Handstand Hold',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2322,
            'name' => '1 min. Handstand Hold (belly against wall)',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2323,
            'name' => '1 min. Handstand Hold (back against wall)',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2324,
            'name' => '5 sec. Split Handstand Hold',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2325,
            'name' => '5 sec. Handstand Hold',
            'event_id' => 79,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2326,
            'name' => 'Forward Roll (hands up, stand up)',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2327,
            'name' => 'Candlestick with Pizza Hands',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2328,
            'name' => 'Straddle Forward Roll',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2329,
            'name' => 'Backward Roll',
            'event_id' => 81,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2330,
            'name' => 'Cartwheel over Mat',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2331,
            'name' => 'Cartwheel through Vertical',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2332,
            'name' => 'Lunge, Cartwheel, Lunge',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2333,
            'name' => 'Cartwheel with Straight Legs',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2334,
            'name' => 'Cartwheel with Bent Legs',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2335,
            'name' => 'Cartwheel on Both Sides (R & L)',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2336,
            'name' => 'Step, Hurdle & Lunge',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2337,
            'name' => 'Side Cartwheel',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2338,
            'name' => 'Cartwheel to Arabesque Hold',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2339,
            'name' => '1 Handed Cartwheel (far arm)',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2340,
            'name' => '1 Handed Cartwheel (near arm)',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2341,
            'name' => 'Cartwheel from Kneel',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2342,
            'name' => 'Cartwheel, Step In',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2343,
            'name' => 'Standing Round Off',
            'event_id' => 80,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2344,
            'name' => '10 sec. Bridge Hold with Feet Elevated',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2345,
            'name' => '10sec. Bridge Hold(one leg vertical)',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2346,
            'name' => '10 sec. Single Leg, Elevated Bridge Hold',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2347,
            'name' => 'Bridge Kickover from Elevated Surface',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2348,
            'name' => 'Bridge Kickover from Ground',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2349,
            'name' => 'Walk 4 Steps down Wall in Arch',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2350,
            'name' => 'Tic Toc',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2351,
            'name' => 'Handstand to Bridge',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2352,
            'name' => 'Front Limber',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2353,
            'name' => 'Private Lesson - Backbend from Stand',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2354,
            'name' => 'Private Lesson - Backhandspring',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2355,
            'name' => '10 Arch Rockers',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2356,
            'name' => '10 Arch Ups',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2357,
            'name' => '10 Full Squats',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2358,
            'name' => '10 Half Squats',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2359,
            'name' => '5 Arabesque Kicks on Each Leg from Stand',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2360,
            'name' => '5 Burpees',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2361,
            'name' => '5 Crunches',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2362,
            'name' => '5 Forward Kicks on Each Leg from Stand',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2363,
            'name' => '5 Push Ups',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2364,
            'name' => '5 Push Ups (from knees)',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2365,
            'name' => '5 Side Kicks on Each Leg from Stand',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2366,
            'name' => '5 Sit Ups',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2367,
            'name' => '5 V-Ups',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2368,
            'name' => '5x Arabesque Kicks from Kneel',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2369,
            'name' => '5x Front Kicks on each leg from Back',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2370,
            'name' => '5x Side Kicks each leg from Side',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2371,
            'name' => '10 sec. Arch Hold',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2372,
            'name' => '30 sec. Bicycle Legs',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2373,
            'name' => '10 sec. Boat Hold',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2374,
            'name' => '30 sec. Prone Hold on Elbows',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2375,
            'name' => 'ABC Prone Hold',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2376,
            'name' => '5 sec. Superman',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2377,
            'name' => '5 sec. Arch Hold to 5 Arch Ups (repeat 3x)',
            'event_id' => 77,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2378,
            'name' => 'Backwalkover (Right)',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2379,
            'name' => 'Backwalkover (Left)',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2380,
            'name' => 'Front Walkover (Right)',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2381,
            'name' => 'Front Walkover (Left)',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2382,
            'name' => 'Valdez',
            'event_id' => 76,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2383,
            'name' => 'Forward Roll on wedge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2384,
            'name' => 'Backward Roll down wedge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2385,
            'name' => 'Handstand Flat Back on Mat Stack',
            'event_id' => 84,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2386,
            'name' => 'Vertical Handstand on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2387,
            'name' => 'Rope Climb to the top',
            'event_id' => 92,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2388,
            'name' => 'Straddle press on block',
            'event_id' => 92,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2389,
            'name' => 'Backward Roll to Push-Up',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2390,
            'name' => '3/4 Handstand',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2391,
            'name' => 'Back Handspring over barrel',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2392,
            'name' => 'Back Walkover',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2393,
            'name' => 'Bridge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2394,
            'name' => 'Bridge Kickover off blocks or mat',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2395,
            'name' => 'Cartwheel over block',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2396,
            'name' => 'Front Walkover',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2397,
            'name' => 'Front Handspring stepout on TT',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2398,
            'name' => 'Handstand Forward Roll',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2399,
            'name' => 'Handstand to Bridge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2400,
            'name' => 'Handstand to Vertical',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2401,
            'name' => 'Round-off off panel mat to sit and fall',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2402,
            'name' => 'Round-off Back Handspring on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2403,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2404,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2405,
            'name' => 'Split Leap with 60°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2406,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2407,
            'name' => 'Leg Swing Hop at Horizontal',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2408,
            'name' => 'Handstand fall to pushup position on mat',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2409,
            'name' => 'Split Jump with 30°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2410,
            'name' => 'Split Jump with 60°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2411,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2412,
            'name' => 'Straddle Jump with 30°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2413,
            'name' => 'Straddle Jump with 90°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2414,
            'name' => 'Straight Jump',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2415,
            'name' => 'Stretch Jump with 1/2 Turn',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2416,
            'name' => 'Tuck Jump',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2417,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2418,
            'name' => 'Back handspring with spot down wedge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2419,
            'name' => 'Aerial Cartwheel',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2420,
            'name' => 'Lever',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2421,
            'name' => 'Bridge kickover on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2422,
            'name' => 'Stride handstand with small jump',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2423,
            'name' => 'Front Tuck off TT',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2424,
            'name' => 'Cartwheel step in with lever out',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2425,
            'name' => 'Back handspring over barrel to pushup position on',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2426,
            'name' => 'Lunge to passe hold',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2427,
            'name' => 'Round-off BHS Back Tuck on TT',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2428,
            'name' => 'Pushup position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2429,
            'name' => 'Tuck Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2430,
            'name' => 'Tuck position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2431,
            'name' => 'Straddle position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2432,
            'name' => 'Fouetté,',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2433,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2434,
            'name' => 'Back handspring on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2435,
            'name' => 'Headstand 5 seconds',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2436,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2437,
            'name' => 'Back handspring down wedge',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2438,
            'name' => 'Straddle Jump with 150°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2439,
            'name' => 'Straddle Jump with 180°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2440,
            'name' => 'Stretch Jump with 1/1 Turn',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2441,
            'name' => 'Back handspring off TT',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2442,
            'name' => 'Lunge position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2443,
            'name' => 'Tuck Jump with 1/1 Turn',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2444,
            'name' => 'Forward roll forward roll connected',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2445,
            'name' => '3/4 Handstand on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2446,
            'name' => 'Straight jump on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2447,
            'name' => 'Lever on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2448,
            'name' => 'Cartwheel',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2449,
            'name' => 'Forward Roll',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2450,
            'name' => '1/2 Turn on One Foot',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2451,
            'name' => 'T position on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2452,
            'name' => 'Lever on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2453,
            'name' => 'Straight jump on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2454,
            'name' => 'Leg swings forward on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2455,
            'name' => 'Lever on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2456,
            'name' => 'Back walkover on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2457,
            'name' => 'Pivot Turn',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2458,
            'name' => 'Split Leap with 90°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2459,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2460,
            'name' => 'Split Jump with 90°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2461,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2462,
            'name' => '3/4 handstand on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2463,
            'name' => 'Straight Jump on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2464,
            'name' => 'Tuck Jump',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2465,
            'name' => 'Wolf Jump',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2466,
            'name' => 'Cartwheel to Side Handstand Dismount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2467,
            'name' => 'Jump to Front Support Mount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2468,
            'name' => 'Round-off Dismount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2469,
            'name' => 'Skips',
            'event_id' => 87,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2470,
            'name' => 'One foot stand from sit on panel mat to',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2471,
            'name' => 'One leg stand on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2472,
            'name' => 'Walk forward, sideways and backward on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2473,
            'name' => 'Pivot turn on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2474,
            'name' => 'Back Walkover',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2475,
            'name' => 'Front Walkover',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2476,
            'name' => 'Lunge position on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2477,
            'name' => '1/1 Turn on One Foot',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2478,
            'name' => 'Leg swings forward on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2479,
            'name' => 'Releve hold on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2480,
            'name' => 'Split Leap with 150°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2481,
            'name' => 'Split Leap with 180°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2482,
            'name' => 'Squat kick to lunge on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2483,
            'name' => 'Straddle sit press 5 seconds',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2484,
            'name' => 'Split Jump with 150°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2485,
            'name' => 'Split Jump with 180°, Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2486,
            'name' => '3/4 handstand on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2487,
            'name' => 'Stretch Jump with 3/4 Turn',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2488,
            'name' => 'One leg stand low beam to line on floor',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2489,
            'name' => 'Tuck Jump with 1/2 Turn',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2490,
            'name' => 'Pivot turn on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2491,
            'name' => 'Cartwheel to Side HS, 1/4 Turn Dsmt',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2492,
            'name' => 'Stride handstand on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2493,
            'name' => 'Stride handstand on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2494,
            'name' => 'Cartwheel on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2495,
            'name' => 'Cartwheel on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2496,
            'name' => 'Leg Swing with 1/2 Turn Mount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2497,
            'name' => '2 straight body pullups',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2498,
            'name' => 'Cast to 45°, Below Horizontal',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2499,
            'name' => 'Cast to Horizontal',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2500,
            'name' => 'Cast to Above Horizontal',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2501,
            'name' => 'Forward Stride Circle \'Mill Circle\'',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2502,
            'name' => 'Front Hip Circle',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2503,
            'name' => 'Glide',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2504,
            'name' => '10 horizontal pullups',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2505,
            'name' => 'Long Hang Kip',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2506,
            'name' => '10 horizontal leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2507,
            'name' => 'Single Leg Basket Swing',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2508,
            'name' => 'Single Leg Squat Through',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2509,
            'name' => 'Squat On',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2510,
            'name' => 'Tap Swing',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2511,
            'name' => 'Back Hip Circle',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2512,
            'name' => 'Flyaway Dismount in belt',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2513,
            'name' => 'Kip',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2514,
            'name' => 'Pike Sole Circle Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2515,
            'name' => 'Pullover',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2516,
            'name' => 'Straddle Sole Circle Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2517,
            'name' => 'Tap Swing 1/2 Turn Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2518,
            'name' => 'Underswing Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2519,
            'name' => '8 vertical leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2520,
            'name' => '5 chin lever swings',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2521,
            'name' => 'Candle 5 sec in undergrip',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2522,
            'name' => 'Cast to 45°, from Vertical',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2523,
            'name' => 'Cast to Handstand',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2524,
            'name' => 'Cast to Handstand 180°, Pirouette',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2525,
            'name' => 'Clear Hip Circle',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2526,
            'name' => 'Overshoot (Bail)',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2527,
            'name' => 'Straddle Back over Low Bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2528,
            'name' => 'Uprise',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2529,
            'name' => 'Flyaway Dismount with 1/1 Twist',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2530,
            'name' => 'Flyaway Dismount with 1/2 Twist',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2531,
            'name' => 'Stretch Jump to Mat, Kick to HS Flatback',
            'event_id' => 84,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2532,
            'name' => 'Stretch Jump onto Vault Table, HS Flatback',
            'event_id' => 84,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2533,
            'name' => 'Handspring over trainer into pit',
            'event_id' => 84,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2534,
            'name' => 'Handspring 1/2 Twist',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2535,
            'name' => 'Handspring 1/1 Twist',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2536,
            'name' => '1/2 on repulsion vault over trainer into pit',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2537,
            'name' => 'Round-off Flic Flac On, Repulsion Off',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2538,
            'name' => 'Handspring 1 1/2 Twist',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2539,
            'name' => 'Handspring 2/1 Twist',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2540,
            'name' => 'Tsukahara Tuck',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2541,
            'name' => 'Tsukahara Pike',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2542,
            'name' => 'Round-off Flic Flac On, 1/1 Off',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2543,
            'name' => 'Round-off Flic Flac On- Back Tuck',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2544,
            'name' => 'Round-off Flic Flac On- Back Pike',
            'event_id' => 84,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2545,
            'name' => 'Donkey Kick on block',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2546,
            'name' => 'Front handspring step out into pit',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2547,
            'name' => 'Split Jump with 120°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2548,
            'name' => 'Straddle swings on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2549,
            'name' => 'Clear Hip Circle to Handstand',
            'event_id' => 85,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2550,
            'name' => 'Log Roll',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2551,
            'name' => 'Straddle Forward Roll',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2552,
            'name' => 'Tripod',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2553,
            'name' => 'Walk Forwards in Relevé,',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2554,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2555,
            'name' => 'Walk Sidewards in Relevé,',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2556,
            'name' => 'Leg swings forward',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2557,
            'name' => 'Stride handstand with lead leg at vertical',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2558,
            'name' => 'Cartwheel on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2559,
            'name' => 'Pike position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2560,
            'name' => 'Forward roll on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2561,
            'name' => 'T position',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2562,
            'name' => 'Table',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2563,
            'name' => 'Crab Walk',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2564,
            'name' => 'Bear Walk',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2565,
            'name' => 'Cartwheel through vertical on line',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2566,
            'name' => 'Bridge and lift one leg for 5 seconds',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2567,
            'name' => 'Chassé,',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2568,
            'name' => 'Handstand tree fall off high beam to stacked mats',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2569,
            'name' => 'Stride handstand on high beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2570,
            'name' => 'V-Sit',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2571,
            'name' => 'Pivot turn on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2572,
            'name' => 'Squat Turn',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2573,
            'name' => 'Walk Forward',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2574,
            'name' => 'Walk Backward',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2575,
            'name' => 'Walk Sideways',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2576,
            'name' => 'Cartwheel to side handstand 1/4 turn into pit',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2577,
            'name' => 'Cartwheel to side handstand tree fall on mat',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2578,
            'name' => 'Handstand tree fall on end of low beam to mat',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2579,
            'name' => 'Passé, Walks',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2580,
            'name' => 'Coupé, Walks',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2581,
            'name' => 'Lever on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2582,
            'name' => 'Headstand 1 second',
            'event_id' => 87,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2583,
            'name' => 'Squat kick to lunge on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 3,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2584,
            'name' => 'Cartwheel on a Line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2585,
            'name' => 'Cartwheel on a Low Beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2586,
            'name' => 'Vertical handstand on a Line',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2587,
            'name' => 'Vertical handstand on Low Beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2588,
            'name' => 'Forward Roll Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2589,
            'name' => 'Tuck Hang',
            'event_id' => 85,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2590,
            'name' => 'Straddle Hang',
            'event_id' => 85,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2591,
            'name' => 'Leg Lift (Toes to Bar)',
            'event_id' => 85,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2592,
            'name' => 'Pike Hang',
            'event_id' => 85,
            'description' => null,
            'level_id' => 1,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2593,
            'name' => 'Straight Jump off Springboard',
            'event_id' => 84,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2594,
            'name' => 'Tuck Jump off Springboard',
            'event_id' => 84,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2595,
            'name' => 'Straddle Jump off Springboard',
            'event_id' => 84,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2596,
            'name' => 'Pike Jump off Springboard',
            'event_id' => 84,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2597,
            'name' => 'Hurdle',
            'event_id' => 84,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2598,
            'name' => 'Straight Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2599,
            'name' => 'Straddle Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2600,
            'name' => 'Pike Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2601,
            'name' => 'Wolf Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2602,
            'name' => 'Straight Jump 1/2 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2603,
            'name' => 'Split Jump',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2604,
            'name' => 'Back handspring in belt',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2605,
            'name' => 'Straight Jump 1/1 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2606,
            'name' => 'Tuck Jump 1/1 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2607,
            'name' => 'Popa (Straddle Jump 1/1 Turn)',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2608,
            'name' => 'Pike Jump 1/2 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2609,
            'name' => 'Split Jump 1/2 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2610,
            'name' => 'Wolf Jump 1/2 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2611,
            'name' => 'Back Handspring',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2612,
            'name' => 'Front Handspring',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2613,
            'name' => 'Bounder',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2614,
            'name' => 'Front Tuck',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2615,
            'name' => 'Back Tuck',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2616,
            'name' => 'Round-off Back Handspring Back Tuck',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2617,
            'name' => 'Log roll - seat drop roll seat drop',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2618,
            'name' => 'Pike Jump 1/1 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2619,
            'name' => 'Wolf Jump 1/1 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2620,
            'name' => 'Straddle Jump 1/2 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 2,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2621,
            'name' => 'Split Jump 1/1 Turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 4,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2622,
            'name' => 'Seat drop 1/2 turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2623,
            'name' => 'Front Handspring Front Pike',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2624,
            'name' => 'Straddle sit leg lifts on floor',
            'event_id' => 92,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2625,
            'name' => 'Pull-Up to swing on rope',
            'event_id' => 92,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2626,
            'name' => 'Straddle press on floor',
            'event_id' => 92,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2627,
            'name' => 'Rope climb halfway',
            'event_id' => 92,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2628,
            'name' => 'Straight Jump Dismount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2629,
            'name' => 'Tuck Jump Dismount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 6,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2630,
            'name' => 'Split Leap with 120°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2631,
            'name' => 'Walk Forward in Relevé,',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2632,
            'name' => 'Walk Backwards in Relevé,',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2633,
            'name' => 'Walk Sideways in Relevé,',
            'event_id' => 86,
            'description' => null,
            'level_id' => 1,
            'category_id' => 7,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2634,
            'name' => 'Straddle Jump',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2635,
            'name' => 'Forward Giant',
            'event_id' => 85,
            'description' => null,
            'level_id' => 4,
            'category_id' => 2,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2636,
            'name' => 'Straddle sit press with legs above beam for 5 sec.',
            'event_id' => 86,
            'description' => null,
            'level_id' => 4,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2637,
            'name' => 'Split Leap up to panel mat',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2638,
            'name' => 'Handspring On Front Tuck Off',
            'event_id' => 84,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2639,
            'name' => 'Handspring On Front Pike Off',
            'event_id' => 84,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2640,
            'name' => 'Seat drop 1/1 turn',
            'event_id' => 93,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2641,
            'name' => 'Back tuck in belt',
            'event_id' => 93,
            'description' => null,
            'level_id' => 4,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2642,
            'name' => 'Rope Climb without Legs',
            'event_id' => 92,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2643,
            'name' => 'Swivel Hips',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2644,
            'name' => 'Donkey Kick on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2645,
            'name' => 'Seat Drop',
            'event_id' => 93,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2646,
            'name' => 'Jump with control in the center',
            'event_id' => 93,
            'description' => null,
            'level_id' => 4,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2647,
            'name' => 'Straddle Jump with 60°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2648,
            'name' => 'Straddle Jump with 120°, Split',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2649,
            'name' => 'Seat drop 1/2 turn seat drop',
            'event_id' => 93,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2650,
            'name' => '3/4 handstand on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => 5,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2651,
            'name' => 'Straddle press on floor 5 seconds',
            'event_id' => 92,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2652,
            'name' => 'Back Tuck off panel mat into pit',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => 1,
            'certificate' => true,
        ]);

        Skill::create([
            'id' => 2653,
            'name' => 'Jump to Front Support',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2654,
            'name' => 'Cast off to Stand Dismount',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2655,
            'name' => 'Glide Swing to Stand',
            'event_id' => 85,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2656,
            'name' => 'Straddle Jump with 90Â° Split',
            'event_id' => 86,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2657,
            'name' => 'Single Leg Shoot Through',
            'event_id' => 85,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2658,
            'name' => 'Roundoff backhandspring on panel mats and 8 inch m',
            'event_id' => 87,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2659,
            'name' => 'Switch Leg Mount',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2660,
            'name' => 'Vertical handstand on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2661,
            'name' => 'One leg stand on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2662,
            'name' => 'Stride handstand on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => 3,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2663,
            'name' => 'Sit and stand off end of panel mat without hands',
            'event_id' => 87,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2664,
            'name' => 'Backward roll on floor',
            'event_id' => 87,
            'description' => null,
            'level_id' => 1,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2665,
            'name' => 'Scissors Forward',
            'event_id' => 88,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2666,
            'name' => 'Front Giant',
            'event_id' => 91,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2667,
            'name' => 'Straddle press 5 seconds on block',
            'event_id' => 92,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2668,
            'name' => 'Pommel Skill',
            'event_id' => 88,
            'description' => null,
            'level_id' => 2,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2669,
            'name' => 'Cartwheel',
            'event_id' => 94,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2670,
            'name' => 'Pop Cradle',
            'event_id' => 95,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2671,
            'name' => 'Running',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2672,
            'name' => 'Jump from one foot to two feet',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2673,
            'name' => 'Jump up to block on two feet',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2674,
            'name' => '3/4 handstand against wall',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2675,
            'name' => 'Run with knees up',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2676,
            'name' => 'Run down panel mat jump to floor',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2677,
            'name' => 'Tuck and straddle holds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2678,
            'name' => 'Cast away and land on feet',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2679,
            'name' => 'Horizontal hanging position',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2680,
            'name' => '1 horizontal pull-up without body change',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2681,
            'name' => 'Casting - belly off bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2682,
            'name' => 'Walk forward, sideways and backward on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2683,
            'name' => 'Donkey kick with hands on beam and feet on floor',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2684,
            'name' => 'Skip',
            'event_id' => 100,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2685,
            'name' => 'Left Split',
            'event_id' => 101,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2686,
            'name' => 'Releve hold on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2687,
            'name' => 'Plie/releve on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2688,
            'name' => 'Walk forward sideways and backward on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2689,
            'name' => 'T position using beam for balance',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2690,
            'name' => 'Releve hold on chicken beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2691,
            'name' => 'Jumps on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2692,
            'name' => 'Vertical handstand against wall for 15 seconds',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2693,
            'name' => 'Jump from board to mat with arm lift',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2694,
            'name' => 'Assemble with arm lift',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2695,
            'name' => 'Jump from block to board to mat with arm lift',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2696,
            'name' => 'Run into pit for speed',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2697,
            'name' => '2 to 3 steps run to land on board with arms down',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2698,
            'name' => 'Run and jump on board with two feet to land on mat',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2699,
            'name' => 'Jog run sprint into pit',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2700,
            'name' => 'Run, jump on board with a min. of a 3 foot hurdle',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2701,
            'name' => 'Run and jump on board and do a tuck jump',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2702,
            'name' => 'Run and jump on board and do a straddle jump',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2703,
            'name' => 'Handstand on board and tree fall to mat',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2704,
            'name' => 'Run, jump on board then straight jump to 24 mats',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2705,
            'name' => 'Run, jump on board with a min. of a 5 foot hurdle',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2706,
            'name' => '2-3 steps handstand block from board to flatback',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2707,
            'name' => 'Straight jump from board to 32 in mat',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2708,
            'name' => 'Superman handstand over barrel',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2709,
            'name' => 'Jump to handstand flatback on 24 inch mats',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2710,
            'name' => 'Jump to handstand flatback on 32 inch mats',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2711,
            'name' => 'Handspring over 32 inch mat sideways into pit',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2712,
            'name' => 'Straight jump to table at 115 cm or higher',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2713,
            'name' => 'Handstand flatback on table with stacked mats',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2714,
            'name' => 'Handspring over table on 115 cm or higher',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2715,
            'name' => 'Front support hollow hold 5 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2716,
            'name' => '1 horizontal pullup',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2717,
            'name' => '5 horizontal pullups',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2718,
            'name' => 'Tummy roll',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2719,
            'name' => 'Front support hollow hold 10 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2720,
            'name' => '1 horizontal leg lift on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2721,
            'name' => '3 horizontal leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2722,
            'name' => 'Front support shoulder shrugs with straight arms',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2723,
            'name' => 'Candle shape on floor holding wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2724,
            'name' => 'Front support hollow hold 20 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2725,
            'name' => '5 horizontal leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2726,
            'name' => 'Pullover with bar high block',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2727,
            'name' => 'Stemme rise with straight arms',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2728,
            'name' => 'Chin up hold 3 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2729,
            'name' => 'Chin up hold 5 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2730,
            'name' => 'Pullover from block lower than bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2731,
            'name' => 'Small cast with shoulder shrug technique',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2732,
            'name' => 'Spotted candle shape on single rail in undergrip',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2733,
            'name' => 'Kick to pullover from floor',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2734,
            'name' => 'Spotted cast back hip circle',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2735,
            'name' => 'Arch hold on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2736,
            'name' => 'Planches on barrel with hands on floor bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2737,
            'name' => 'Chin up hold 10 seconds',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2738,
            'name' => '1 Vertical leg lift on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2739,
            'name' => 'Cast with straight arms and hollow shape',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2740,
            'name' => 'Cast back hip circle alone',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2741,
            'name' => '3 vertical leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2742,
            'name' => '5 vertical leg lifts on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2743,
            'name' => 'Hanging hollow shape on wall bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2744,
            'name' => 'Jump from two feet to pullover',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2745,
            'name' => 'Chin up lever swings',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2746,
            'name' => 'Candle 3 seconds in undergrip alone on single rail',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2747,
            'name' => 'Glide swing with barrel',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2748,
            'name' => 'Jump to glide swing',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2749,
            'name' => 'Kip machine swings',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2750,
            'name' => 'Kip machine to front support',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2751,
            'name' => 'Bent knee hollow shape',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2752,
            'name' => 'Bent knee hollow hold 5 seconds arms down',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2753,
            'name' => 'Bent knee hollow hold 15 seconds arms down',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2754,
            'name' => 'Bent knee hollow hold 30 seconds arms down',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2755,
            'name' => 'Hollow hold with one leg straight 5 sec arms down',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2756,
            'name' => 'Bent knee hollow hold 15 seconds arms up',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2757,
            'name' => 'Bent knee hollow hold 30 seconds arms up',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2758,
            'name' => 'Superman shape',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2759,
            'name' => 'Superman hold with arms by ears 5 seconds',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2760,
            'name' => 'Superman hold with arms by ears 10 seconds',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2761,
            'name' => 'Straight leg modified split positions',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2762,
            'name' => 'Hip flexor stretches',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2763,
            'name' => 'Pike stretch to touch ankles',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2764,
            'name' => 'Pike stretch to touch toes',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2765,
            'name' => 'Split forward with cube under each knee',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2766,
            'name' => 'Split forward flat on floor',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2767,
            'name' => 'Middle split with cube under each knee',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2768,
            'name' => 'Middle split flat on floor',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2769,
            'name' => 'Pike stretch to touch ankles',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2770,
            'name' => 'Pike stretch to touch toes',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2771,
            'name' => 'Straight leg modified forward splits',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2772,
            'name' => 'Hip flexor stretch positions',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2773,
            'name' => 'Forward splits with cube under both knees',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2774,
            'name' => 'Forward splits to floor',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2775,
            'name' => 'Middle split with cube under both knees',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2776,
            'name' => 'Middle split to floor',
            'event_id' => 103,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2777,
            'name' => '10 sec. hollow hold, arms down/legs straight',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2778,
            'name' => 'Rope climb halfway with no feet',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2779,
            'name' => '10 sec hollow hold arms up/legs straight',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2780,
            'name' => 'Straddle press on floor 10 seconds',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2781,
            'name' => 'Slider from pushup to pike stand',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2782,
            'name' => 'Planche hold between mats 10 sec',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2783,
            'name' => 'Straddle stand to straddle press hold',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2784,
            'name' => 'Straddle stand to handstand',
            'event_id' => 92,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2785,
            'name' => 'Free hip on strap bar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2786,
            'name' => 'Jump with control on two feet',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2787,
            'name' => 'Tuck jumps',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2788,
            'name' => 'Split jumps',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2789,
            'name' => 'Straddle jumps',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2790,
            'name' => 'Forward roll to stand',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2791,
            'name' => 'Backward roll to stand',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2792,
            'name' => 'Run and straight jump off end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2793,
            'name' => 'Jump backwards',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2794,
            'name' => 'Forward straddle roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2795,
            'name' => 'Forward pike roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2796,
            'name' => 'Backward straddle roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2797,
            'name' => 'Backward pike roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2798,
            'name' => 'Pushup hops',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2799,
            'name' => 'Knee bounce to donkey kick',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2800,
            'name' => 'Knee bounce to handstand',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2801,
            'name' => 'Run jump forward roll over barrel at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2802,
            'name' => 'Frog jumps',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2803,
            'name' => 'Front handspring over barrel at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2804,
            'name' => 'Front handspring stepout off end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2805,
            'name' => 'Front handspring to two feet off the end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2806,
            'name' => 'Flyspring',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2807,
            'name' => 'Jump to back roll on top of wedge mid back high',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2808,
            'name' => 'Standing tuck with spot at end of TT',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2809,
            'name' => 'Standing tuck alone at end of TT',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2810,
            'name' => 'Back handspring over barrel at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2811,
            'name' => 'Back handspring with spot at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2812,
            'name' => 'Back handspring alone at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2813,
            'name' => 'Roundoff at end to hollow land, sit and roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2814,
            'name' => 'Roundoff backhandspring at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2815,
            'name' => 'Aerial at end',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2816,
            'name' => 'Jump feet apart and together all the way down',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2817,
            'name' => 'Pushup doggie drop pushup',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2818,
            'name' => 'Run to end and tuck jump',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2819,
            'name' => 'Run to end and straddle jump',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2820,
            'name' => 'Back drop to mat on tramp',
            'event_id' => 93,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2821,
            'name' => 'Back drop to stand',
            'event_id' => 93,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2822,
            'name' => 'Seat drop straddle through to belly drop',
            'event_id' => 93,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2823,
            'name' => 'Tuck shushunova (belly drop)',
            'event_id' => 93,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2824,
            'name' => 'Jump from end of panel mat to floor',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2825,
            'name' => 'Run down panel mat, jump on board',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2826,
            'name' => 'Run down panel mat, jump on board, land on 8inch',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2827,
            'name' => 'Step together in hoop',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2828,
            'name' => 'Jump into hoop with 2 feet',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2829,
            'name' => 'Hold portable bar with two hands',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2830,
            'name' => 'Hang from bar with help',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2831,
            'name' => 'Climb up ladder',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2832,
            'name' => 'Baby pullup on single rail',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2833,
            'name' => 'Walk forward on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2834,
            'name' => 'Zipper walk on line',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2835,
            'name' => 'Bear walk on 2 low beams',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2836,
            'name' => 'Bear walk on low beam',
            'event_id' => 86,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2837,
            'name' => 'Log roll down wedge mat',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2838,
            'name' => 'March',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2839,
            'name' => 'Toss and catch',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2840,
            'name' => 'Monkey vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2841,
            'name' => 'Safety Vault (Step vault)',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2842,
            'name' => 'Side Vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2843,
            'name' => 'Speed vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2844,
            'name' => 'Thief vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2845,
            'name' => 'Turn vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2846,
            'name' => 'Catpass vault (Kong vault)',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2847,
            'name' => 'Dash vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2848,
            'name' => 'Pop vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2849,
            'name' => 'Reverse vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2850,
            'name' => 'Lache (swing)',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2851,
            'name' => 'Underbar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2852,
            'name' => 'Lazy vault',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2853,
            'name' => 'Turn vault',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2854,
            'name' => 'Cat hang',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2855,
            'name' => 'Cat leap',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2856,
            'name' => 'Reverse underbar',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2857,
            'name' => 'Cartwheel',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2858,
            'name' => 'Dive roll',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2859,
            'name' => 'Front flip',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2860,
            'name' => 'One hand cartwheel',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2861,
            'name' => 'Shoulder roll',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2862,
            'name' => 'Dyno',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2863,
            'name' => 'Precision',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2864,
            'name' => 'Climb up',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2865,
            'name' => 'Crane step - floor to elevation',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2866,
            'name' => 'Palm spin',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2867,
            'name' => 'Side vault pimp',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2868,
            'name' => 'Crane step - Elevation to elevation',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2869,
            'name' => 'Side flip',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2870,
            'name' => 'Horizontal wall run',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2871,
            'name' => 'Tic tak',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2872,
            'name' => 'Wall pop',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2873,
            'name' => 'Wall run',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2874,
            'name' => 'Aerial',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2875,
            'name' => 'Pimp',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2876,
            'name' => 'Wall spin',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2877,
            'name' => 'Back flip',
            'event_id' => 93,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2878,
            'name' => 'Reverse 180 Vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2879,
            'name' => 'Double reverse vault',
            'event_id' => 84,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2880,
            'name' => 'Tac front',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2881,
            'name' => 'Wall roll',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2882,
            'name' => 'Wall flip',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2883,
            'name' => '360 Cat leap',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2884,
            'name' => 'Palm flip',
            'event_id' => 102,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2885,
            'name' => '180 regrab',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2886,
            'name' => '360 regrab',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2887,
            'name' => 'Reverse 360',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2888,
            'name' => 'Kumquat',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2889,
            'name' => 'Sole circle',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2890,
            'name' => 'Skin the catch',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2891,
            'name' => 'Flyaway',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2892,
            'name' => 'Devil drop side',
            'event_id' => 87,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        Skill::create([
            'id' => 2893,
            'name' => '180 cat leap',
            'event_id' => 85,
            'description' => null,
            'level_id' => null,
            'category_id' => null,
            'certificate' => false,
        ]);

        DB::statement('ALTER SEQUENCE skills_id_seq RESTART WITH 2894;');
    }
}
