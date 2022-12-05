<?php

namespace Tests\Unit\app\controllers;

use App\User;
use Tests\TestCase;

class LevelControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->newUser = factory(User::class)->create();
        $this->newUser->assignRole('admin');
        $this->actingAs($this->newUser, 'api');
    }

    public function testList()
    {
        $response = $this->json('GET', 'api/levels', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
