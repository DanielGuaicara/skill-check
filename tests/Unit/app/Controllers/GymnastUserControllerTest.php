<?php

namespace Tests\Unit\app\Controllers;

use App\Challenge;
use App\ClassModel;
use App\Gymnast;
use App\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class GymnastUserControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->newUser = factory(User::class)->create();
        $this->newUser->assignRole('admin');
        $this->actingAs($this->newUser, 'api');
    }

    public function testCreateGymnastUserSuccess()
    {
        $gym = factory('App\Gym')->create();
        $userArray = [
            'email' => 'testt@test.com',
            'gym_id' => $gym->id,
            'url' => "htps://www.skilltrakkertest.com",
        ];
        $response = $this->json('POST', 'api/gyms/gymnasts/', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gym->forceDelete();
        $userLast = User::where('email', $userArray['email'])->first();
        $userLast->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testlist()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);

        $response = $this->json('GET', 'api/gyms/' . $gym->id . '/gymnasts/?limit=5', ['Accept' => 'application/json']);
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

    public function testAddGymnastUserSuccess()
    {
        $this->markTestSkipped('must be revisited.');
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);

        $userArray = [
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'password' => 'password',
            'repeat_password' => 'password',
            'class_id' => 1,
        ];
        $this->actingAs($gymUser, 'api');
        $response = $this->json('POST', 'api/gyms/' . $gym->id . '/gymnasts', $userArray, ['Accept' => 'application/json']);

        $response->assertStatus(201);
        $gymnast = Gymnast::where('gyms_has_users_user_id', $gymUser->id)->first();
        $gymnast->forceDelete();
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testCreateGymnastSuccess()
    {
        $this->markTestSkipped('must be revisited.');
        $gym = factory('App\Gym')->create();

        $newDataUser = [
            'name' => 'UserNew',
            'email' => 'userNew@new.com',
            'password' => bcrypt('test'),
        ];

        $gymUser = factory(User::class)->create($newDataUser);
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);

        $userArray = [
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'password' => 'test',
            'class_id' => 1,
        ];
        $this->actingAs($gymUser, 'api');
        $response = $this->json('POST', 'api/gyms/' . $gym->id . '/gymnasts/members', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $gymnast = Gymnast::where('gyms_has_users_user_id', $gymUser->id)->first();
        $gymnast->forceDelete();
        $gym->forceDelete();
        $gymUser->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testListGymnastSuccess()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymUser, 'api');

        $response = $this->json('GET', 'api/gyms/' . $gym->id . '/gymnasts/members/' . $gymnast->id, ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
        $this->newUser->forceDelete();
    }

    public function testeditGymnastSuccess()
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
        $gymnast->classes()->attach(1);
        $this->actingAs($gymnastUser, 'api');

        $class = ClassModel::create([
            'name' => 'test',
            'skill_list_id' => 1,
        ]);

        $array = [
            'first_name' => 'firstname',
            'last_name' => 'lastname',
            'about' => 'about',
            'timezone' => '4:30 GTM test',
            'class_id' => $class->id,
        ];

        $response = $this->json('PUT', 'api/gyms/' . $gym->id . '/gymnasts/members/' . $gymnast->id, $array, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $class->forceDelete();
        $this->newUser->forceDelete();
    }

    public function testListChallenges()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymUser, 'api');
        $response = $this->json('GET', 'api/gyms/' . $gym->id . '/gymnasts/members/' . $gymnast->id . '/challenges', ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
        $this->newUser->forceDelete();
    }

    public function testListChallengesRegular()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $this->actingAs($gymUser, 'api');
        $response = $this->json('GET', 'api/gyms/' . $gym->id . '/gymnasts/members/' . $gymnast->id . '/challenges_regular', ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
        $this->newUser->forceDelete();
    }

    public function testUpdatedChallengePeding()
    {
        $gym = factory('App\Gym')->create();
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gymnast');
        $gym->users()->attach($gymUser->id);
        $gymnast = factory('App\Gymnast')->create([
            'first_name' => 'FirstName',
            'last_name' => 'LastName',
            'birth_date' => '1997-02-07',
            'gyms_has_users_gym_id' => $gym->id,
            'gyms_has_users_user_id' => $gymUser->id,
        ]);
        $gymnast->classes()->attach(1);
        $challenge = Challenge::create([
            'gym_id' => 1,
            'name' => 'nombre',
            'description' => 'hola',
            'points' => 30,
            'is_featured' => true,
        ]);
        $this->actingAs($gymUser, 'api');
        $response = $this->json('PUT', 'api/gyms/' . $gym->id . '/gymnasts/members/' . $gymnast->id . '/challenges/' . $challenge->id . '/pending', ['Accept' => 'application/json']);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
            ]);
        $this->newUser->forceDelete();
    }
}
