<?php

use Illuminate\Database\Seeder;
use App\Gym;
use App\GymsHasUsers;

class ImportGymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get(__DIR__ . '/json/gyms.json');
        $gyms = json_decode($json)[2]->data;

        DB::table('gyms')->truncate();
    
        foreach ($gyms as $gym){
            $user = Gym::create(array(
                'name' => $gym->name,
                'description' => 'Test',
                'settings' => [
                    'address' => $gym->address,
                    'phone' => $gym->phone,
                    'website' => $gym->website,
                    'city' => $gym->city,
                    'state' => $gym->state,
                    'zip' => $gym->zip,
                    'contact_email' => $gym->contact_email,
                    'password' => $gym->password,
                    'code' => $gym->code,
                    'dbname' => $gym->dbname,
                    'shares' => $gym->shares,
                    'downloads' => $gym->downloads,
                    'gymnast_dash_edit' => $gym->gymnast_dash_edit,
                    'leaderboard_enabled' => $gym->leaderboard_enabled,
                    'leaderboard_top' => $gym->leaderboard_top,
                    'generic_certificates_enabled' => $gym->generic_certificates_enabled,
                    'theme' => [
                        'primary' => [
                            'color' => "#3764c4",
                            'hover' => "#1a3385"
                        ],
                        'secondary' => [
                            'color' => "#7849bf",
                            'hover' => "#601f90"
                        ]
                    ],
                    'redeem_points_url' => $gym->redeem_points_url,
                ]
            ));

            
        }
        
    }
}
