<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class RolesPermissionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //super user
    $super_admin = Role::updateOrCreate(['name' => 'super_admin']);

    //default user
    $user = Role::updateOrCreate(['name' => 'user']);

    // create permissions
    $permissions = [
      ['name' => 'access_users'],
      ['name' => 'create_users'],
      ['name' => 'show_users'],
      ['name' => 'edit_users'],
      ['name' => 'delete_users'],

      ['name' => 'access_roles'],
      ['name' => 'create_roles'],
      ['name' => 'show_roles'],
      ['name' => 'edit_roles'],
      ['name' => 'delete_roles'],

      ['name' => 'access_permissions'],
      ['name' => 'create_permissions'],
      ['name' => 'show_permissions'],
      ['name' => 'edit_permissions'],
      ['name' => 'delete_permissions'],
    ];

    foreach ($permissions as $permission) {
      Permission::updateOrCreate(['name' => $permission['name']], $permission);
    }

    $permissions = Permission::all();
    //create roles and assign existing permissions
    $super_admin->syncPermissions($permissions);
  }
}
