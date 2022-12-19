<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;

class ProfessionTableController extends Controller
{
    public function index()
    {

        return view('tables.professiontable.index', [
            'users' => Profession::sortable()->filter()->paginate(4),
        ]);
    }
}
