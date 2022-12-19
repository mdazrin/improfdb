<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ImprofTableController extends Controller
{
    public function index()
    {

        return view('tables.improftable.index', [
            'users' => User::sortable()->filter()->paginate(4),
        ]);
    }
}
