<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'email' => 'admin@testmail.com',
                'name' => 'Super Admin',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
            ],
            [
                'email' => 'user@testmail.com',
                'name' => 'Test User',
                'password' => Hash::make('12345678'),
                'role' => 'user',
            ],
        ];

        $role = new Role;
        foreach ($users as $key => $user) {
            $newUser = User::updateOrCreate([
                'email' => $user['email'],
            ], [
                'name' => $user['name'],
                'password' => $user['password'],
            ]);

            if ($newUser->id == 1) {
                $role = $role->updateOrCreate(['name' => 'admin']);
            } else {
                $role = $role->updateOrCreate(['name' => 'user']);
            }

            $permissions = Permission::pluck('id')->toArray();

            $role->syncPermissions($permissions);
            $newUser->assignRole([$role->id]);
        }
    }
}
