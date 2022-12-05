<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{
    public function index(Request $request)
    {
        $string_query=$request->input('search','33');

        $users = DB::table('users')
            ->join('improf_profiles', 'users.id', '=', 'improf_profiles.user_id')
            ->join('personal_infos', 'users.id', '=', 'personal_infos.user_id')
            ->select('users.*', 'improf_profiles.*','personal_infos.*')
            ->where('personal_infos.ic','=',$string_query)
            ->get();

        return view('userprofile',['users'=>$users]);

    }
}
