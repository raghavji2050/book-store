<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AssignUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = User::whereDoesntHave('roles')->get();
      $role = Role::updateOrCreate(['name' => 'User']);

      foreach ($users as $user) {
        $user->assignRole([$role->id]);
      }
    }
}
