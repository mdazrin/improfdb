<?php

namespace App\Http\Controllers;

use App\Models\BaitulMuslim;
use Illuminate\Http\Request;

class BaitulMuslimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('baitulmuslim.index',[
            'users'=>BaitulMuslim::sortable()->filter()->paginate(4),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaitulMuslim  $baitulMuslim
     * @return \Illuminate\Http\Response
     */
    public function show(BaitulMuslim $baitulMuslim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaitulMuslim  $baitulMuslim
     * @return \Illuminate\Http\Response
     */
    public function edit(BaitulMuslim $baitulMuslim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BaitulMuslim  $baitulMuslim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BaitulMuslim $baitulMuslim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaitulMuslim  $baitulMuslim
     * @return \Illuminate\Http\Response
     */
    public function destroy(BaitulMuslim $baitulMuslim)
    {
        //
    }
}
