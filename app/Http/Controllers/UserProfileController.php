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
            ->select('users.*', 'improf_profiles.*')
            ->get();

        return view('userprofile',['users'=>$users]);

        //ddd($users);

    }
}
