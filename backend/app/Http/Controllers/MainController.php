<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class MainController extends BaseController
{
    use ValidatesRequests;

    public function getSchoolKeysForLogin() {
        return DB::connection('sat_backend')->table('ORGANIZATION')->select(['id', 'school_id', 'name', 'streetname', 'cityzipcode', 'cityname'])->where('orgtype', 'SCHOOL')->get();
    }
    public function getSchoolKeysForRegistration() {
        return DB::connection('sat_backend')->table('ORGANIZATION')
                                            ->leftJoin('SCHOOLS', 'SCHOOLS.id', '=', 'school_id')
                                            ->where('orgtype', 'SCHOOL')
                                            ->whereNull('SCHOOLS.public_key')
                                            ->select(['ORGANIZATION.id', 'school_id', 'name', 'streetname', 'cityzipcode', 'cityname'])
                                            ->get();
    }

}
