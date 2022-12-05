<?php

namespace Tests\Unit\app\Controllers;

use App\User;
use App\Gym;
use Tests\TestCase;

class GymUserControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->newUser = factory(User::class)->create();
        $this->newUser->assignRole('admin');
        $this->actingAs($this->newUser, 'api');
    }

    public function testDeleteGymUserAsGym()
    {   
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('DELETE', 'api/gyms/'.$gym->id.'/users/'.$gymUser->id,[] , ['Accept' => 'application/json']); 
        $response->assertStatus(200);
        $gym->users()->detach($gymUser->id);
        $gymUser->forceDelete();
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testDeleteGymUserAsAdmin()
    {   
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('DELETE', 'api/gyms/users/'.$gymUser->id,[] , ['Accept' => 'application/json']); 
        $response->assertStatus(200);
        $gym->users()->detach($gymUser->id);
        $gymUser->forceDelete();
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }
    
    public function testAddGymUserSuccess()
    {   
        $gym = factory('App\Gym')->create();
        $userArray = [
            'name' => 'Test',
            'email' => 'testadmin@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
            'gym_id' => array($gym->id)
        ];
        $response = $this->json('POST', 'api/gyms/users', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gym->forceDelete();
        $user = User::where('email', 'testadmin@admin.com')->first();
        $user->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testAddGymUserFail()
    {   
        $user = factory(User::class)->create();
        $user->assignRole('admin');
        $this->actingAs($user, 'api');
        $gym = factory('App\Gym')->create();
        $userArray = [
            'name' => 'Test',
            'email' => $this->newUser->email,
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
            'gym_id' => array($gym->id)
        ];
        $response = $this->json('POST', 'api/gyms/users', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $gym->forceDelete();
        $this->newUser->forceDelete();
        $user->forceDelete();
    }

    public function testUpdateGymUserSuccess()
    {
        $gym = factory('App\Gym')->create();
        $dataUpdate = [
            'name' => 'TestForUpdate',
            'email' => 'emailupdated@update.es',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
            'gym_id' => array($gym->id)
        ];
        $response = $this->json('PUT', 'api/gyms/users/'.$this->newUser->id, $dataUpdate, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testUpdateGymUserFail()
    {
        $gym = factory('App\Gym')->create();
        $dataUpdate = [
            'name' => 'TestForUpdate11',
            'email' => 'emailupdated@update.es',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
            'gym_id' => array($gym->id)
        ];
        $response = $this->json('PUT', 'api/gyms/users/'.$this->newUser->id, $dataUpdate, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $gym->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testGetGymUserAsGym()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/users/'.$gymUser->id, ['Accept' => 'application/json']);
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
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testGetGymUserAsAdmin()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('GET', 'api/gyms/users/'.$gymUser->id, ['Accept' => 'application/json']);
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
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }
    
    public function testGymUserListAsGym()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('GET', 'api/gyms/'.$gym->id.'/users/?limit=5', ['Accept' => 'application/json']);
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
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testGymUserListAsAdmin()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('GET', 'api/gyms/users/?limit=5', ['Accept' => 'application/json']);
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
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }
}
