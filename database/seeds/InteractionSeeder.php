<?php

use App\Interaction;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Interaction::insert([
            ['name' => 'Clap', 'code' => 'clap', 'icon' => null, 'is_comment' => 0, 'created_at' => $now ],
            ['name' => 'High five', 'code' => 'highfive', 'icon' => null, 'is_comment' => 0, 'created_at' => $now ],
            ['name' => 'Comment', 'code' => 'comment', 'icon' => null, 'is_comment' => 1, 'created_at' => $now ],
        ]);
    }
}
