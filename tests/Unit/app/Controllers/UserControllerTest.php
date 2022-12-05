<?php

namespace Tests\Unit\app\Controllers;

use App\User;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * token of Session user
     *
     * @var string
     */
    protected $token;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        auth()->attempt(['email' => 'admin@admin.com', 'password' => 'admin']);
        $this->token = auth()->user()->createToken('Personal Token')->accessToken;
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testListAdmin()
    {
        $new_data_user = [
            'email' => 'testadmin@admin.com',
            'password' => bcrypt('admin'),
        ];

        $user = factory(User::class)->create($new_data_user);
        $user->assignRole('admin');
        $this->actingAs($user, 'api');
        $response = $this->json('GET', 'api/users/administrators', [], ['Accept' => 'application/json']);
        $resp = $response->json();
        $user->forceDelete();
        foreach ($resp['data'] as $key) {
            if ($user->email === $key['email'] && $key['id'] === $user->id) {
                $response->assertStatus(200);
            }
        }
    }

    public function testCreateAdminUserSuccess()
    {
        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');

        $userArray = [
            'name' => 'Tests',
            'email' => 'testadmin@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',

        ];
        $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(201);
        $userLast = User::where('email',$userArray['email'])->first();
        $userLast->forceDelete();
        $userLogged->forceDelete();
    }

    public function testCreateAdminFailUserInactive()
    {
        $newDataUserInactive = [
            'name' => 'UsertestInactive',
            'email' => 'testinactive@admin.com',
            'password' => bcrypt('admin'),
            'deleted_at' => '2020-01-01 19:00:08',
        ];
        $userInactive = factory(User::class)->create($newDataUserInactive);
        $userInactive->assignRole('admin');

        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');

        $userArray = [
            'name' => 'Test',
            'email' => 'testinactive@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',

        ];
        $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $userLogged->forceDelete();
        $userInactive->forceDelete();
    }

    public function testCreateAdminUserFailWithoutName()
    {
        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');
        $userArray = [
            'name' => '',
            'email' => 'testadmin@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',

        ];
        $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $userLogged->forceDelete();
    }

    public function testCreateAdminUserFailWithoutEmail()
    {
        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');
        $userArray = [
            'name' => 'TestName',
            'email' => '',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',

        ];
        $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);

        $response->assertStatus(422);
        $userLogged->forceDelete();
    }

    public function testCreateAdminUserFailWithoutPassword()
    {
        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');
        $userArray = [
            'name' => 'TestName',
            'email' => 'testadmin@admin.com',
            'password' => '',
            'repeat_password' => 'adminadmin',

        ];
        $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $userLogged->forceDelete();
    }

    public function testCreateAdminUserFailOnInvalidEmail()
    {
        $userLogged = factory(User::class)->create();
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');
        collect(
            [
                'test@test,com',
                'bad_teste.org',
                'admin_example@bad+user.com',
                str_repeat('a', 65) . '@admin.com',
            ]
        )->each(
            function ($invalidEmail) {
                $userArray = [
                    'name' => 'Name',
                    'email' => $invalidEmail,
                    'password' => '',
                    'repeat_password' => 'adminadmin',
                ];
                $response = $this->json('POST', 'api/users/administrators', $userArray, ['Accept' => 'application/json']);
                $response->assertStatus(422);
            }
        );

        $userLogged->forceDelete();
    }
    /**
     * exchange for a valid token
     *
     * @return void
     */
    public function testShowAdminUser()
    {
        $response = $this->withHeaders([
            'Authorization' => "Bearer {$this->token}",
        ])->json('GET', 'api/users/administrators/1');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at',
                'deleted_at',
            ]);
    }

    public function testUpdateAdminUserSuccess()
    {
        $newDataUser = [
            'name' => 'Usertest',
            'email' => 'testadminforupdate@admin.com',
            'password' => bcrypt('admin'),
        ];
        $userLogged = factory(User::class)->create($newDataUser);
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');

        $dataUpdate = [
            'name' => 'Tests',
            'email' => 'updateadmin@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
        ];
        $response = $this->json('PUT', 'api/users/administrators/'.$userLogged->id, $dataUpdate, ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $userLogged->forceDelete();
    }

    public function testUpdateAdminUserFail()
    {
        $newDataUserExistent = [
            'name' => 'UsertestInactive',
            'email' => 'testinactive@admin.com',
            'password' => bcrypt('admin'),
            'deleted_at' => '2020-01-01 19:00:08',
        ];
        $userExistent = factory(User::class)->create($newDataUserExistent);
        $userExistent->assignRole('admin');

        $newDataUser = [
            'name' => 'Usertest',
            'email' => 'testadminforupdate@admin.com',
            'password' => bcrypt('admin'),
        ];
        $userLogged = factory(User::class)->create($newDataUser);
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');

        $dataUpdate = [
            'name' => 'Tests11',
            'email' => 'testinactive@admin.com',
            'password' => 'adminadmin1',
            'repeat_password' => 'adminadmin2',

        ];
        $response = $this->json('PUT', 'api/users/administrators/'.$userLogged->id, $dataUpdate, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $userLogged->forceDelete();
        $userExistent->forceDelete();
    }

    public function testUpdateAdminFailUserInactive()
    {
        $newDataUserInactive = [
            'name' => 'UsertestInactive',
            'email' => 'testinactive@admin.com',
            'password' => bcrypt('admin'),
            'deleted_at' => '2020-01-01 19:00:08',
        ];
        $userInactive = factory(User::class)->create($newDataUserInactive);
        $userInactive->assignRole('admin');

        $newDataUser = [
            'name' => 'Usertest',
            'email' => 'testadmin@admin.com',
            'password' => bcrypt('admin'),
        ];
        $userLogged = factory(User::class)->create($newDataUser);
        $userLogged->assignRole('admin');
        $this->actingAs($userLogged, 'api');

        $dataUpdate = [
            'name' => 'TestInactive',
            'email' => 'testinactive@admin.com',
            'password' => 'adminadmin',
            'repeat_password' => 'adminadmin',
        ];
        $response = $this->json('PUT', 'api/users/administrators/'.$userLogged->id, $dataUpdate, ['Accept' => 'application/json']);
        $response->assertStatus(422);
        $userLogged->forceDelete();
        $userInactive->forceDelete();
    }

    public function testDeleteAdminUserSuccess()
    {
        $userAdmin = factory(User::class)->create();
        $userAdmin->assignRole('admin');
        $this->actingAs($userAdmin, 'api');

        $userForDelete = factory(User::class)->create();
        $userForDelete->assignRole('admin');

        $response = $this->json('DELETE', 'api/users/administrators/' . $userForDelete->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $userForDelete->forceDelete();
        $userAdmin->forceDelete();
    }

    public function testDeleteAdminUserFail()
    {
        $userAdmin = factory(User::class)->create();
        $userAdmin->assignRole('admin');
        $this->actingAs($userAdmin, 'api');

        $userForDelete = factory(User::class)->create();
        $userForDelete->assignRole('admin');
        $idForDelete = $userForDelete->id + 1;

        $response = $this->json('DELETE', 'api/users/administrators/' . $idForDelete, [], ['Accept' => 'application/json']);
        $response->assertStatus(404);
        $userForDelete->forceDelete();
        $userAdmin->forceDelete();
    }

    public function testDeleteFailAdminUserHimself()
    {
        $userLoged = factory(User::class)->create();
        $userLoged->assignRole('admin');
        $this->actingAs($userLoged, 'api');

        $response = $this->json('DELETE', 'api/users/administrators/' . $userLoged->id, [], ['Accept' => 'application/json']);
        $response->assertStatus(403);
        $userLoged->forceDelete();
    }

    public function testRestoreAdminUser()
    {
        $email = 'admin@admin.com';
        $response = $this->withHeaders([
            'Authorization' => "Bearer {$this->token}",
        ])->json('PATCH', 'api/users/administrators/'.$email.'/restore');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'id',
                'name',
                'email',
                'email_verified_at',
                'created_at',
                'updated_at',
                'deleted_at',
            ]);
    }

    public function testCheckRoleSuccess()
    {
        $email = 'admin@admin.com';
        $response = $this->withHeaders([
            'Authorization' => "Bearer {$this->token}",
        ])->json('GET', 'api/users/roles/'.$email);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [ 'role',
                ],
            ]);
    }

    public function testCheckRoleFail()
    {
        $email = 'testemailfail@admin.com';
        $response = $this->withHeaders([
            'Authorization' => "Bearer {$this->token}",
        ])->json('GET', 'api/users/roles/'.$email);
        $response->assertStatus(404);
    }

    public function testAssignAdmin()
    {
        $gymUser = factory(User::class)->create();
        $gymUser->syncRoles('gym');

        $user = factory(User::class)->create();
        $user->assignRole('admin');
        $this->actingAs($user, 'api');

        $response = $this->json('GET', 'api/users/administrators/'.$gymUser->email.'/assign', ['Accept' => 'application/json']);
        $response->assertStatus(200);
        $gymUser->forceDelete();
        $user->forceDelete();
    }
}
