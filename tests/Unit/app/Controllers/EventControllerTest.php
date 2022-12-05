<?php

namespace Tests\Unit\app\Controllers;

use App\Event;
use App\User;
use Tests\TestCase;

class EventControllerTest extends TestCase
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

    public function testCreateSuccess()
    {
        
        $arrayData = [
            'name' => 'Gym Force' . random_int(0, 100),
            'abbrev' => "GF{$this->newUser->name[0]}" . random_int(0, 100)
        ];
        $response = $this->json('POST', 'api/gyms/1/events', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testUpdate()
    {
        $arrayData = [
            'name' => 'Vault1',
            'abbrev' => 'VT1'
        ];
        $response = $this->json('PATCH', 'api/gyms/1/events/1', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testDelete()
    {
        $response = $this->json('DELETE', 'api/gyms/1/events/1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testRestore()
    {
        $response = $this->json('PUT', 'api/gyms/1/events/1', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }

    public function testlist()
    {
        $response = $this->json('GET', 'api/gyms/1/events', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
