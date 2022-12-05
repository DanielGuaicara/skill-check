<?php

namespace Tests\Unit\app\Controllers;

use App\Skill;
use App\User;
use Tests\TestCase;

class SkillControllerTest extends TestCase
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

    public function testCreate()
    {
        $arrayData = [
            'name' => 'skill 50',
            'description' => '',
            'category_id' => 1,
            'level_id' => 1,
            'certificate' => false
        ];
        $response = $this->json('POST', 'api/gyms/1/events/104/skills', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testList()
    {
        $response = $this->json('GET', 'api/gyms/1/events/1/skills', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testShow()
    {
        $response = $this->json('GET', 'api/gyms/1/events/1/skills/1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testUpdate()
    {
        $arrayData = [
            'name' => 'Forward Roll',
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ];
        $response = $this->json('PUT', 'api/gyms/1/events/107/skills/1', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testDelete()
    {
        $skill = Skill::create([
            'event_id' => 107,
            'name' => 'skill 50',
            'description' => '',
            'category_id' => 1,
            'level_id' => 1,
            'certificate' => false
        ]);
        $response = $this->json('DELETE', "api/gyms/1/events/107/skills/{$skill->id}", [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $skill->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testUpdateProgress()
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
        $gymnast->skills()->attach(1);
        $arrayData = [
            'progress_status' => 1,
        ];
        $response = $this->json('PUT', 'api/gyms/1/skills/1/members/'.$gymnast->id, $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
