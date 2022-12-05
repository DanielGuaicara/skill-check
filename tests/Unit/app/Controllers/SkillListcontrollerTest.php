<?php

namespace Tests\Unit\app\controllers;

use App\Skill;
use App\SkillList;
use App\User;
use Tests\TestCase;

class SkillListcontrollerTest extends TestCase
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
        ];
        $response = $this->json('POST', 'api/gyms/1/skill_lists', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $this->newUser->forceDelete();
    }

    public function testList()
    {
        $response = $this->json('GET', 'api/gyms/1/skill_lists', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testShow()
    {
        $response = $this->json('GET', 'api/gyms/1/skill_lists/1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testDelete()
    {
        $skilllist = SkillList::create([
            'gym_id' => 1,
            'name'  => 'skill list test'
        ]);
        $response = $this->json('DELETE', "api/gyms/1/skill_lists/{$skilllist->id}", [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $skilllist->forceDelete();
    }

    public function testRestore()
    {
        $skilllist = SkillList::create([
            'gym_id' => 1,
            'name'  => 'skill list test'
        ]);
        $skilllist->delete();
        $response = $this->json('PATCH', "api/gyms/1/skill_lists/{$skilllist->id}", [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $skilllist->forceDelete();
    }
    
    public function testAssignSkillToSkillList()
    {
        $skillList = SkillList::create([
            'name' => 'skill 50',
            'gym_id' => 1,
        ]);
        $array = [
            'skill_list_id' => $skillList->id,
            'skill_id' => 2,
        ];
        $response = $this->json('POST', 'api/gyms/1/skill_lists/assign/skills', $array, ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
        $this->newUser->forceDelete();
        $skillList->forceDelete();
    }

    public function testDeleteSkill()
    {
        $skillList = SkillList::create([
            'name' => 'skill 50',
            'gym_id' => 1,
        ]);
        $skill = Skill::create([
            'name' => 'TEST',
            'event_id' => 107,
            'description' => null,
            'level_id' => 2,
            'category_id' => 1,
            'certificate' => false,
        ]);
        $skillList->skills()->attach($skill->id);
        $response = $this->json('DELETE', 'api/gyms/1/skill_lists/'.$skillList->id.'/skills/'.$skill->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $skillList->forceDelete();
        $skill->forceDelete();
    }

    public function testUpdate()
    {
        $arrayData = [
            'name' => 'skill 50',
            'skill_id' => 1,
            'order' => 1
        ];
        $response = $this->json('PUT', 'api/gyms/1/skill_lists/1', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
