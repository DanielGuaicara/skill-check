<?php

namespace Tests\Unit\app\Controllers;

use App\Challenge;
use App\User;
use Tests\TestCase;

class ChallengeControllerTest extends TestCase
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
        $arrayData = [
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ];

        $response = $this->json('POST', 'api/gyms/1/challenges', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $this->newUser->forceDelete();
    }

    public function testCreateGeneric()
    {
        $arrayData = [
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ];

        $response = $this->json('POST', 'api/generic/challenges', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $this->newUser->forceDelete();
    }

    public function testUpdate()
    {
        $challenge = Challenge::create([
            'gym_id' => 1,
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ]);

        $arrayData = [
            'is_featured' => true,
            'featured_date' => '2021-04-01',
        ];

        $response = $this->json('PUT', "api/gyms/1/challenges/{$challenge->id}", $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $challenge->forceDelete();
    }

    public function testList()
    {
        $response = $this->json('GET', 'api/gyms/1/challenges?limit=1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testDelete()
    {
        $challenge = Challenge::create([
            'gym_id' => 1,
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ]);

        $response = $this->json('DELETE', "api/gyms/1/challenges/{$challenge->id}", [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $challenge->forceDelete();
    }

}
