<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;

class PersonalTableController extends Controller
{
    public function index()
    {

        return view('tables.personaltable.index', [
            'users' => PersonalInfo::sortable()->filter()->paginate(4),
        ]);
    }
}
