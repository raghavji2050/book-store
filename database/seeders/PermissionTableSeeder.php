<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
         'product-list',
         'product-create',
         'product-edit',
         'product-delete'
      ];

      foreach ($permissions as $permission) {
           Permission::updateOrCreate(['name' => $permission]);
      }
    }
}
