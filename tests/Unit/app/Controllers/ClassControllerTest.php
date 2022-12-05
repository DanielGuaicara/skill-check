<?php

namespace Tests\Unit\app\Controllers;

use App\ClassModel;
use App\User;
use Tests\TestCase;

class ClassControllerTest extends TestCase
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

    public function testCreateClassSuccess()
    {
        
        $arrayData = [
            "name"=> "ClassNew",
            "description"=> "DescriptionTest",
            "skill_list_id"=> 1,
        ];
        $response = $this->json('POST', 'api/gyms/1/classes', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testDeleteSuccess()
    {
        $class = ClassModel::create([
            'name' => 'skill Test',
            'description' => 'test',
            'skill_list_id' => 1,
        ]);
        $response = $this->json('DELETE', 'api/gyms/1/classes/'.$class->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $class->forceDelete();
    }
    public function testUpdateClassSuccess()
    {
        
        $arrayData = [
            "name"=> "ClassChanged",
            "description"=> "DescriptionTest",
            "skill_list_id"=> 1,
        ];

        $class = ClassModel::create([
            'name' => 'skill Test',
            'description' => 'test',
            'skill_list_id' => 1,
        ]);

        $response = $this->json('PUT', 'api/gyms/1/classes/'.$class->id, $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $class->forceDelete();
    }

    public function testRestoreSuccess()
    {
        $class = ClassModel::create([
            'name' => 'skill Test',
            'description' => 'test',
            'skill_list_id' => 1,
            'deleted_at' => '1997-02-07',
        ]);
        $response = $this->json('PATCH', 'api/gyms/1/classes/'.$class->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'description',
                'skill_list_id',
                'created_at',
                'updated_at',
                'deleted_at',
            ]);
        $this->newUser->forceDelete();
        $class->forceDelete();
    }
    
    public function testClassListSuccess()
    {
        $response = $this->json('GET', 'api/gyms/1/classes', [], ['Accept' => 'application/json']);
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

    public function testClassShow()
    {
        $response = $this->json('GET', 'api/gyms/1/classes/1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
