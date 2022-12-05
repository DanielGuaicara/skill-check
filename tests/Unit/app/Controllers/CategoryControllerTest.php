<?php

namespace Tests\Unit\app\controllers;

use App\User;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
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
        $response = $this->json('GET', 'api/categories', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
    }
}
