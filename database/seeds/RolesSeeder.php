<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin 	= Role::create(['name' => 'admin','guard_name' => 'api']);
        $role_gym 		= Role::create(['name' => 'gym','guard_name' => 'api']);
		$role_gymnast 	= Role::create(['name' => 'gymnast','guard_name' => 'api']);

        $user_admin 	= User::create([
		                    'name' => 'admin',
		                    'email'=> 'admin@admin.com',
		                    'password' => bcrypt('admin')
                		  ]);
        $user_admin->assignRole('admin');
    }
}
