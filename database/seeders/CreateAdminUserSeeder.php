<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Hash;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::updateOrCreate([
          'email' => 'admin@bookstore.com',
      ], [
          'first_name' => 'Admin',
          'last_name'  => '',
          'password' => Hash::make('admin@bookstore')
      ]);

      $role = Role::updateOrCreate(['name' => 'Admin']);

      $permissions = Permission::pluck('id','id')->all();

      $role->syncPermissions($permissions);

      $user->assignRole([$role->id]);
    }
}
