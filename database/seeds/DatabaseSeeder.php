<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(RolesSeeder::class);
        $this->call(GymSeeder::class);
        $this->call(EventSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(SkillListSeeder::class);
        $this->call(InteractionSeeder::class);
        $this->call(FunMediaSeeder::class);*/
        $this->call(BonusSeeder::class);
        $this->call(ImportUserSeeder::class);
        $this->call(ImportMembersSeeder::class);
        $this->call(ImportMemberSeeder::class);
        $this->call(ImportFeedSeCondPart::class);
        $this->call(ImportFeedThirdPart::class);
        $this->call(ImportFeedFourthPart::class);
    }
}
