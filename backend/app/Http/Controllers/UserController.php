<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserController extends BaseController
{
    use ValidatesRequests;


private $studentRole = null;
private $adminRole = null;
private $mentorRole = null;
private $schoolAdminRole = null;
private $schoolOrganizerRole = null;
private $organizationAdminRole = null;


    public function syncUsers(Request $request) {

        $satUsers = DB::connection('sat_backend')->table('USERS')->get();
        $satRoles = DB::connection('sat_backend')->table('USER_PERMISSIONS')->whereNotNull('ROLE')->get();

        $this->studentRole = Role::findOrCreate('student');
        $this->adminRole = Role::findOrCreate('admin');
        $this->mentorRole = Role::findOrCreate('mentor');
        $this->schoolAdminRole = Role::findOrCreate('school_admin');
        $this->schoolOrganizerRole = Role::findOrCreate('school_organizer');
        $this->organizationAdminRole = Role::findOrCreate('organization_admin');


        foreach ($satUsers as $satUser) {
        //dd($satUser);
            $user = User::where('username', $satUser->username)->first();
            if ($user) {
                continue;
            }

            $user = new User();
            $user->username = $satUser->username;
            $user->name = $satUser->username;
            $user->email = $satUser->email;
            $user->password = $satUser->password;
            $user->save();
        }

        $users = User::all();

        //foreach ($users as $user) {
        //    $filteredSatRoles = $satRoles->filter(function($satRole) use ($user){
        //       return $satRole->USERNAME == $user->username;
        //    });
        //
        //    foreach ($filteredSatRoles as $filteredSatRole) {
        //        $user->assignRole($this->getRole($filteredSatRole->ROLE));
        //    }
        //}


        return 'true';

    }

    private function getRole($satRoleString) {
        switch ($satRoleString) {
            case 'ROLE_ADMIN':
                return $this->adminRole->name;
            case 'ROLE_MENTOR':
                return $this->mentorRole->name;
            case 'ROLE_SCHOOLORG':
                return $this->schoolOrganizerRole->name;
            case 'ROLE_SCHOOLADMIN':
                return $this->schoolAdminRole->name;
            case 'ROLE_ORGADMIN':
                return $this->organizationAdminRole->name;
            case 'ROLE_STUDENT':
                return $this->studentRole->name;
        }
    }
}
