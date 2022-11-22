<?php

namespace App\Http\Controllers;

use App\Models\BasicTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = BasicTable::SimplePaginate(3);;
        //$users = DB::table('basic_tables')->simplePaginate(3);;
        return view('dashboard', compact('users'));
        //$users = DB::table('basic_tables')->simplePaginate(3);;
        //return view('dashboard',['users'=>$users]);

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
     * @param  \App\Models\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function show(BasicTable $basicTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicTable $basicTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BasicTable $basicTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicTable  $basicTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicTable $basicTable)
    {
        //
    }
}
