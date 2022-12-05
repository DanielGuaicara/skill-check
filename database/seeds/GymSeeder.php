<?php

use App\Gym;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gyms = [
            [
                'id' => 1,
                'name' => 'Club Zero',
                'settings' => [
                    'address' => '22 Nice place',
                    'phone' => '(123) 456-7890',
                    'website' => 'http://jessicasgymnastics.com/',
                    'city' => 'Hauppauge',
                    'state' => 'NC',
                    'zip' => '11530',
                    'contact_email' => 'jessica@gymnasticshq.com',
                    'password' => '5cbcf07e36fe37142b407ace0211cbf7',
                    'code' => '1111',
                    'dbname' => 'club0',
                    'shares' => 104,
                    'downloads' => 298,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 0,
                    'leaderboard_top' => 10,
                    'generic_certificates_enabled' => 1,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => null
                ]
            ],
            [
                'id' => 2,
                'name' => 'Knightdale Gymnastics',
                'settings' => [
                    'address' => '304 Village Dr.',
                    'phone' => '9192664005',
                    'website' => 'http://www.knightdalegymnastics.com/',
                    'city' => 'Knightdale',
                    'state' => 'NC',
                    'zip' => '27545',
                    'contact_email' => 'knightdalegym@gmail.com',
                    'password' => 'd86084391a8e131fe5e1267c34bdd5a7',
                    'code' => '4444',
                    'dbname' => 'knightdalegymnastics',
                    'shares' => 0,
                    'downloads' => 125,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 0,
                    'leaderboard_top' => 10,
                    'generic_certificates_enabled' => 1,
                    'theme' => [
                        'primary' => [
                            'color' => '#68abed',
                            'hover' => '#3a92e8'
                        ],
                        'secondary' => [
                            'color' => '#67ed37',
                            'hover' => '#49dd14'
                        ]
                    ],
                    'redeem_points_url' => NULL
                ]
            ],
            [
                'id' => 3,
                'name' => 'Club One',
                'settings' => [
                    'address' => '22 Somewhere Pl',
                    'phone' => '9175049021',
                    'website' => 'http://jessicasplace1.com',
                    'city' => 'Raleigh',
                    'state' => 'NY',
                    'zip' => '11508',
                    'contact_email' => 'gymnasticshq@gmail.com',
                    'password' => 'eca0c7a77f099861df9ac0bd7cfe5847',
                    'code' => '1234',
                    'dbname' => 'club1',
                    'shares' => 0,
                    'downloads' => 1,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 0,
                    'leaderboard_top' => 10,
                    'generic_certificates_enabled' => 0,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => NULL
                ]
            ],
            [
                'id' => 4,
                'name' => 'GymnasticsHQ',
                'settings' => [
                    'address' => '1000 Internet St.',
                    'phone' => '9.195.554.444',
                    'website' => 'http://www.gymnasticshq.com',
                    'city' => 'Internet',
                    'state' => 'We',
                    'zip' => '11500',
                    'contact_email' => 'jessica@gymnasticshq.com',
                    'password' => '5cbcf07e36fe37142b407ace0211cbf7',
                    'code' => '9843',
                    'dbname' => 'gymnasticshq',
                    'shares' => 0,
                    'downloads' => 25378,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 1,
                    'leaderboard_top' => 50,
                    'generic_certificates_enabled' => 0,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => 'https://skilltrakker.com/skilltrakker-store.html'
                ]
            ],
            [
                'id' => 5,
                'name' => 'Devora\'s Gym',
                'settings' => [
                    'address' => '1970 S Taylor Road',
                    'phone' => '216-315-3345',
                    'website' => 'http://www.devorasgym.com',
                    'city' => 'Cleveland Heights',
                    'state' => 'Oh',
                    'zip' => '44118',
                    'contact_email' => 'devora.greenberger@gmail.com',
                    'password' => 'a63e5a4ee74dc4933ed51b3f8626f0c4',
                    'code' => '5678',
                    'dbname' => 'devorasgym',
                    'shares' => 0,
                    'downloads' => 3711,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 1,
                    'leaderboard_top' => 20,
                    'generic_certificates_enabled' => 0,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => 'https://skilltrakker.com/devoras-gym-store.html'
                ]
            ],
            [
                'id' => 6,
                'name' => 'GymRatz',
                'settings' => [
                    'address' => '14133 Crenshaw Blvd',
                    'phone' => '310-895-5692',
                    'website' => 'https://www.gymratzla.com',
                    'city' => 'Hawthorne',
                    'state' => 'CA',
                    'zip' => '90250',
                    'contact_email' => 'gymratzla@gmail.com',
                    'password' => '482c811da5d5b4bc6d497ffa98491e38',
                    'code' => '4321',
                    'dbname' => 'gymratz',
                    'shares' => 0,
                    'downloads' => 2,
                    'gymnast_dash_edit' => 0,
                    'leaderboard_enabled' => 1,
                    'leaderboard_top' => 10,
                    'generic_certificates_enabled' => 0,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => NULL
                ]
            ],
            [
                'id' => 7,
                'name' => 'G-Force Gymnastics Training Center',
                'settings' => [
                    'address' => '21580 Beaumeade Cir #160',
                    'phone' => '5719338300',
                    'website' => 'www.goforce-gymnastics.com',
                    'city' => 'Ashburn',
                    'state' => 'VA',
                    'zip' => '20147',
                    'contact_email' => 'coach.lori@gforce-gymnastics.com',
                    'password' => '3f6724542c01987cde5cd7a9aa67d0bc',
                    'code' => '5678',
                    'dbname' => 'gforceva',
                    'shares' => 0,
                    'downloads' => 151,
                    'gymnast_dash_edit' => 0,
                    'leaderboard_enabled' => 1,
                    'leaderboard_top' => 50,
                    'generic_certificates_enabled' => 0,
                    'theme' => [
                        'primary' => [
                            'color' => '#e1467a',
                            'hover' => '#d2225d'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => 'https://skilltrakker.com/gforce-skilltrakker-store-v2.html'
                ]
            ],
            [
                'id' => 8,
                'name' => 'Jump! Gymnastics',
                'settings' => [
                    'address' => '',
                    'phone' => '',
                    'website' => 'http://www.jump-austin.com/',
                    'city' => 'Austin',
                    'state' => 'TX',
                    'zip' => '',
                    'contact_email' => 'north@jump-austin.com',
                    'password' => '599afec1fe5991a5944810becb088512',
                    'code' => '1234',
                    'dbname' => 'jumpaustin',
                    'shares' => 0,
                    'downloads' => 158,
                    'gymnast_dash_edit' => 1,
                    'leaderboard_enabled' => 1,
                    'leaderboard_top' => 10,
                    'generic_certificates_enabled' => 1,
                    'theme' => [
                        'primary' => [
                            'color' => '#bacd32',
                            'hover' => '#95a428'
                        ],
                        'secondary' => [
                            'color' => '#7555a4',
                            'hover' => '#5d4482'
                        ]
                    ],
                    'redeem_points_url' => 'https://gymnasticshq.com/jump-gymnastics-skilltrakker-prize-store/'
                ]
            ]
        ];
        foreach ($gyms as $gym) {
            Gym::create($gym);
        }
        DB::statement('ALTER SEQUENCE gyms_id_seq RESTART WITH 9;');
    }
}
