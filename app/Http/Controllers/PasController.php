<?php

namespace App\Http\Controllers;

use App\Models\Pas;
use Illuminate\Http\Request;

class PasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pas.index',[
            'users'=>Pas::sortable()->filter()->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'involvement' => 'required|string|max:255',

        ]);

        $request->user()->pas()->create($validated);

        return redirect(route('pas.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function show(Pas $pas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pas $pas)
    {
        return view('pas.edit', [

            'pas' => $pas,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pas $pas)
    {
        $validated = $request->validate([

            'message' => 'required|string|max:255',

        ]);

        $personalInfo->update($validated);

        return redirect(route('personalInfo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pas $pas)
    {
        //
    }
}
