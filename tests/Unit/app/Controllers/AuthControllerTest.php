<?php

namespace Tests\Unit\app\Controllers;

use App\User;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $user = factory(User::class)->create([
            'email' => 'testadmin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        $user->assignRole('admin');
        $loginData = ['email' => 'testadmin@admin.com', 'password' => 'admin'];
        $response = $this->json('POST', 'api/auth/login', $loginData, ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'token', 'user_role', 'id', 'name', 'email', 'timezone',
                ],
            ]);
        $user->forceDelete();
    }

    public function testLoginFailed()
    {
        $user = factory(User::class)->create([
            'email' => 'testadmin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        $user->assignRole('admin');
        $loginData = ['email' => 'testadmin@admin.com', 'password' => 'adminfail'];
        $response = $this->json('POST', 'api/auth/login', $loginData, ['Accept' => 'application/json']);
        $response->assertStatus(422)
            ->assertJsonStructure([
                'error',
                'message',
            ]);
        $user->forceDelete();
    }

    public function testGymnastLogin()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create([
            'email' => 'testgymnasts@gymnast.com',
            'password' => bcrypt('gymnast'),
        ]);
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $loginData = ['email' => 'testgymnasts@gymnast.com', 'password' => 'gymnast'];
        $response = $this->json('POST', 'api/auth/login', $loginData, $loginData, ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'token', 'user_role', 'id', 'name', 'email', 'timezone', 'gyms',
                ],
            ]);
        $gymUser->forceDelete();
        $gym->forceDelete();
    }
}
