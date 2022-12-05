<?php

namespace App\Http\Controllers;


use App\Models\ImprofProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImprofProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //$users = ImprofProfile::latest()->get();
            $users = User::SimplePaginate(1);
            //ddd((asset($users->image->url)));
        //$users = DB::table('basic_tables')->simplePaginate(3);;
        return view('dashboard', compact('users'));

        //$users = DB::table('basic_tables')->simplePaginate(3);;
        //return view('dashboard',['users'=>$users]);

    }

    public function show_search(Request $request)
    {
        //$string_query=$request->input('search','33');

        $users = User::table('users')
            ->join('improf_profiles', 'users.id', '=', 'improf_profiles.user_id')
            ->join('personal_infos', 'users.id', '=', 'personal_infos.user_id')
            ->select('users.*', 'improf_profiles.*','personal_infos.*')
            ->where('personal_infos.ic','=',$string_query)
            ->get();

        return view('dashboard',['users'=>$users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $client = ImprofProfile::create($input);

        $hasFile = $request->hasFile('avatar');

        if($hasFile)
        {
            $path = $request->file('avatar')->store('images');
            //$file->storeAs('images',$request->input('firstname'). '.' . $file->guessExtension());
        }
        //if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
        //    dump(Storage::disk('public')->putFile('images',$client));
        //}

        return redirect()->route('basic');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImprofProfile  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ImprofProfile  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ImprofProfile $basicTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ImprofProfile  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImprofProfile $basicTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ImprofProfile  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImprofProfile $basicTable)
    {
        //
    }
}
