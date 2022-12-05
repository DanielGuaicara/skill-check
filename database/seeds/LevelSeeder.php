<?php

use App\Level;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Level::insert([
            [
                'id' => 1,
                'level' => 'Rec class skills',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'level' => 'Level 1-4 Skills',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'level' => 'Level 5-8 Skills',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'level' => 'Advanced',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
        DB::statement('ALTER SEQUENCE levels_id_seq RESTART WITH 5;');
    }
}
