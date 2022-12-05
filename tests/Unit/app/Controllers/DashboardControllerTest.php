<?php

namespace Tests\Unit\app\controllers;

use App\Event;
use App\Gymnast;
use App\User;
use Tests\TestCase;

class DashboardControllerTest extends TestCase
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

    public function testList()
    {
        $gym = factory('App\Gym')->create();
        $gymnastUser = factory(User::class)->create();
        $gymnastUser->syncRoles('gymnast');
        $gym->users()->attach($gymnastUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymnastUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymnastUser, 'api');
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/gymnasts/members/'.$gymnast->id.'/events', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testListSkills()
    {
        $gym = factory('App\Gym')->create();
        $gymnastUser = factory(User::class)->create();
        $gymnastUser->syncRoles('gymnast');
        $gym->users()->attach($gymnastUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymnastUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymnastUser, 'api');
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/members/'.$gymnast->id.'/events/1'.$gymnast->id.'/skills', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testSkillsPercentage()
    {
        $gym = factory('App\Gym')->create();
        $gymnastUser = factory(User::class)->create();
        $gymnastUser->syncRoles('gymnast');
        $gym->users()->attach($gymnastUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymnastUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymnastUser, 'api');
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/members/'.$gymnast->id.'/skills/percentage', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testFeedSkillsList()
    {
        $gym = factory('App\Gym')->create();
        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/feed/', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $gym->forceDelete();
    }
}
