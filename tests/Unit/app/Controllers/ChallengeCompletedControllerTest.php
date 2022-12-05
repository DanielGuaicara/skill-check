<?php

namespace Tests\Unit\app\Controllers;

use App\Challenge;
use App\User;
use Tests\TestCase;

class ChallengeCompletedControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->newUser = factory(User::class)->create();
        $this->newUser->assignRole('admin');
        $this->actingAs($this->newUser, 'api');
    }

    public function testCreate()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);
        $this->actingAs($gymUser, 'api');
        $challenge = Challenge::create([
            'gym_id' => $gym->id,
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ]);
        $arrayData = [
            'challenge_id' => $challenge->id,
            'media_path' => 'path',
            'media_caption' => 'caption',
            'points' => 10,
        ];
        $response = $this->json('POST', 'api/gyms/'.$gym->id.'/gymnasts/members/'.$gymnast->id .'/challenges', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $this->newUser->forceDelete();
    }

    public function testChallengesCompletedList()
    {
        $gym = factory('App\Gym')->create();
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/gymnasts/challenges/carousel/', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
