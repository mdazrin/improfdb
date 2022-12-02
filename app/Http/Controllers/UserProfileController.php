<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
            ->join('improf_profiles', 'users.id', '=', 'improf_profiles.user_id')
            ->join('personal_infos', 'users.id', '=', 'personal_infos.user_id')
            ->select('users.*', 'improf_profiles.*','personal_infos.*')
            ->get();

        return view('userprofile',['users'=>$users]);

        //ddd($users);

    }
}
