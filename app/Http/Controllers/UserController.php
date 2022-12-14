<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('users.index',[
            'users'=>User::sortable()->filter()->paginate(4),
        ]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = new Image;
        $test->url= $request->file('avatar')->store('images');
        $test->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {

        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //get the user id
        $test = User::find($user->id);
        $image = $test->image;

        //validate and save everything except picture
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'ppi' => 'required|integer',
            'batch' => 'required',
            'avatar' => 'image',
        ]);

        $test->save();

        //save picture
        if ($request->hasFile('avatar'))
        {
            $path = $request->file('avatar')->store('images');
            $image->url = $path;
            $image->save();
        }


        return redirect()
            ->back()
            ->withStatus('Profile has been updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
