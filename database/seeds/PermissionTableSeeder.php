<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=>'Can create teams','guard_name'=>'test']);
        Permission::create(['name'=>'Can update teams','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete teams','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch teams','guard_name'=>'test']);
        Permission::create(['name'=>'Can create boards','guard_name'=>'test']);
        Permission::create(['name'=>'Can update boards','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete boards','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch boards','guard_name'=>'test']);
        Permission::create(['name'=>'Can create columns','guard_name'=>'test']);
        Permission::create(['name'=>'Can update columns','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete columns','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch columns','guard_name'=>'test']);
        Permission::create(['name'=>'Can create tickets','guard_name'=>'test']);
        Permission::create(['name'=>'Can update tickets','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete tickets','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch tickets','guard_name'=>'test']);
        Permission::create(['name'=>'Can create users','guard_name'=>'test']);
        Permission::create(['name'=>'Can update users','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete users','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch users','guard_name'=>'test']);
        Permission::create(['name'=>'Can create roles','guard_name'=>'test']);
        Permission::create(['name'=>'Can update roles','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete roles','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch roles','guard_name'=>'test']);
        Permission::create(['name'=>'Can create permissions','guard_name'=>'test']);
        Permission::create(['name'=>'Can update permissions','guard_name'=>'test']);
        Permission::create(['name'=>'Can delete permissions','guard_name'=>'test']);
        Permission::create(['name'=>'Can fetch system logs','guard_name'=>'test']);
    }
}
