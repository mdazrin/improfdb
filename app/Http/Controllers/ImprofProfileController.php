<?php

namespace App\Http\Controllers;


use App\Models\ImprofProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            $users = ImprofProfile::SimplePaginate(3);

        //$users = DB::table('basic_tables')->simplePaginate(3);;

            return view('dashboard', compact('users'));

        //$users = DB::table('basic_tables')->simplePaginate(3);;
        //return view('dashboard',['users'=>$users]);

    }

    public function test()
    {

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
        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $client->addMediaFromRequest('avatar')->toMediaCollection();
        }

        return redirect()->route('basic');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ImprofProfile  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function show(ImprofProfile $basicTable)
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
