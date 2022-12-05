<?php

namespace Tests\Unit\app\Controllers;

use App\User;
use Tests\TestCase;

class LeaderboardTest extends TestCase
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

    public function testLeaderboard()
    {
        $response = $this->json('GET', 'api/gyms/1/leaderboard', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testLeaderboardProfile()
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
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/leaderboard/gymnasts/'.$gymnast->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $gymnast->forceDelete();
        $gym->forceDelete();
    }
}
