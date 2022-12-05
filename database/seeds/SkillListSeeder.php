<?php

use App\SkillList;
use Illuminate\Database\Seeder;

class SkillListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skillList = SkillList::create([
            'gym_id' => 1,
            'name' => 'skill list 1'
        ]);

        $skillList->skills()->attach(1, ['order' => 1]);
        $skillList->skills()->attach(2, ['order' => 2]);
        $skillList->skills()->attach(100, ['order' => 3]);
    }
}
