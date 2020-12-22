<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        Role::create([
            'name' => 'admin',
            'guard_name' => 'api'
        ]);
        Role::create([
            'name' => 'student',
            'guard_name' => 'api'
        ]);
        Role::create([
            'name' => 'school_admin',
            'guard_name' => 'api'
        ]);
        Role::create([
            'name' => 'school_organizer',
            'guard_name' => 'api'
        ]);
        Role::create([
            'name' => 'organization_admin',
            'guard_name' => 'api'
        ]);
        Role::create([
            'name' => 'mentor',
            'guard_name' => 'api'
        ]);
    }

}
