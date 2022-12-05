<?php

namespace Tests\Unit\app\controllers;

use App\FeedEntry;
use App\User;
use Tests\TestCase;

class InteractionControllerTest extends TestCase
{
    /**
     * A basic unit test example.
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

    public function testUpdate()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstNameForFedd',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);

        $arrayData = [
            'member_id' => $gymnast->id,
            'is_comment' => 0,
            'created_at' => '2021-09-13 20:47:23',
        ];

        $feed = FeedEntry::create([
            'gymnast_id' => $gymnast->id,
            'type' => 2,
            'data' => json_encode('test'),
        ]);
        $response = $this->json('PUT', 'api/feed/'.$feed->id.'/interaction/clap', $arrayData, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $feed->forceDelete();
    }

    public function testGet()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstNameForFedd',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);

        $arrayData = [
            'member_id' => $gymnast->id,
            'interaction_id' => 1,
            'is_comment' => 0,
            'created_at' => '2021-09-13 20:47:23',
        ];

        $feed = FeedEntry::create([
            'gymnast_id' => $gymnast->id,
            'type' => 2,
            'data' => json_encode('test'),
        ]);
        $response = $this->json('GET', 'api/feed/'.$feed->id.'/interaction', [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $this->newUser->forceDelete();
        $feed->forceDelete();
    }
}
