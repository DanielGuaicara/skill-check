<?php

namespace Tests\Unit\app\Controllers;

use App\User;
use App\Gym;
use Tests\TestCase;

class GymControllerTest extends TestCase
{   
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->newUser = factory(User::class)->create();
        $this->newUser->assignRole('admin');
        $this->actingAs($this->newUser, 'api');
    }

    public function testGetGyms()
    {
        $response = $this->json('GET', 'api/gyms/search?search=ho', [], ['Accept' => 'application/json']);
        $response->assertStatus(200)
                 ->assertJsonStructure([
                    'current_page',
                    'data',
                    'first_page_url',
                    'from',
                    'last_page',
                    'last_page_url',
                    'next_page_url',
                    'path',
                    'per_page',
                    'prev_page_url',
                    'to',
                    'total',
                ]);
        $this->newUser->forceDelete();
    }

    public function testCreateFailed()
    {
        
        $arrayData = [
            "name"=> " ",
            "description"=> "Gym description",
            "settings"=> [
                "address"=> "Gym addres",
                "city"=> "Gym City",
                "state"=> "Gym State",
                "zipcode"=> 12345,
                "email"=> "gym@gymtest.com",
                "is_leaderboard_enabled"=> false,
                "is_dashboard_editable"=> false,
                "is_generic_certificate_enabled"=> false,
                "leaderboard_top"=> 12,
                "redeem_points_url"=> "https://www.gymtest.com",
                "theme"=> [
                    "primary"=> [
                        "color"=> "#d22333",
                        "hover"=> "hoverfail"
                    ],
                    "secondary"=> [
                        "color"=> "#7555a4",
                        "hover"=> "#5d4482"
                    ]
                ]
            ]
        ];
        $response = $this->json('POST', 'api/gyms', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $this->newUser->forceDelete();
    }

    public function testCreateSuccess()
    {
        
        $arrayData = [
            "name"=> "Gymname",
            "description"=> "Gym description",
            "settings"=> [
                "address"=> "Gym addres",
                "city"=> "Gym City",
                "state"=> "Gym State",
                "zipcode"=> 12345,
                "email"=> "gym@gymtest.com",
                "is_leaderboard_enabled"=> false,
                "is_dashboard_editable"=> false,
                "is_generic_certificate_enabled"=> false,
                "leaderboard_top"=> 12,
                "redeem_points_url"=> "https://www.gymtest.com",
                "theme"=> [
                    "primary"=> [
                        "color"=> "#d22333",
                        "hover"=> "#d2225d"
                    ],
                    "secondary"=> [
                        "color"=> "#7555a4",
                        "hover"=> "#5d4482"
                    ]
                ]
            ]
        ];
        $response = $this->json('POST', 'api/gyms', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testListGyms()
    {
        $response = $this->json('GET', 'api/gyms/', [], ['Accept' => 'application/json']);
        $response->assertStatus(200)
                 ->assertJsonStructure([
                    'current_page',
                    'data',
                    'first_page_url',
                    'from',
                    'last_page',
                    'last_page_url',
                    'next_page_url',
                    'path',
                    'per_page',
                    'prev_page_url',
                    'to',
                    'total',
                ]);
        $this->newUser->forceDelete();
    }

    public function testUpdateSuccess()
    {
        $gym = factory('App\Gym')->create();
        $arrayData = [
            "id" => $gym->id,
            "name"=> "Gymname",
            "description"=> "Gym description",
            "settings"=> [
                "address"=> "Gym addres",
                "city"=> "Gym City",
                "state"=> "Gym State",
                "zipcode"=> 12345,
                "email"=> "gym@gymtest.com",
                "is_leaderboard_enabled"=> false,
                "is_dashboard_editable"=> false,
                "is_generic_certificate_enabled"=> false,
                "leaderboard_top"=> 12,
                "redeem_points_url"=> "https://www.gymtest.com",
                "theme"=> [
                    "primary"=> [
                        "color"=> "#d22333",
                        "hover"=> "#d2225d"
                    ],
                    "secondary"=> [
                        "color"=> "#7555a4",
                        "hover"=> "#5d4482"
                    ]
                ]
            ]
        ];

        $response = $this->json('PUT', 'api/gyms', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testUpdateFailed()
    {

        $gym = factory('App\Gym')->create();
        $arrayData = [
            "id" => " ",
            "name"=> " ",
            "description"=> "Gym description",
            "settings"=> [
                "address"=> "Gym addres",
                "city"=> "Gym City",
                "state"=> "Gym State",
                "zipcode"=> 12345,
                "email"=> "gym@gymtest.com",
                "is_leaderboard_enabled"=> false,
                "is_dashboard_editable"=> false,
                "is_generic_certificate_enabled"=> false,
                "leaderboard_top"=> 12,
                "redeem_points_url"=> "https://www.gymtest.com",
                "theme"=> [
                    "primary"=> [
                        "color"=> "#error",
                        "hover"=> "#error"
                    ],
                    "secondary"=> [
                        "color"=> "#7555a4",
                        "hover"=> "#5d4482"
                    ]
                ]
            ]
        ];

        $response = $this->json('PUT', 'api/gyms', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testDelete() {
        $gym = factory('App\Gym')->create();
        $response = $this->json('DELETE', "api/gyms/{$gym->id}",[], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gym->forceDelete();
    }

    public function testShow()
    {   
        $gym = factory('App\Gym')->create();
        $response = $this->json('GET', 'api/gyms/'.$gym->id,[] , ['Accept' => 'application/json']); 
        $response->assertStatus(200);
        $response->assertJsonStructure([
                'id',
                'name',
                'description',
                'settings',
                'created_at',
                'updated_at',
                'deleted_at',
            ]);
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }
}
