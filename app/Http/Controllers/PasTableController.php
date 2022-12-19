<?php

namespace App\Http\Controllers;

use App\Models\Pas;
use Illuminate\Http\Request;

class PasTableController extends Controller
{
    public function index()
    {

        return view('tables.pastable.index', [
            'users' => Pas::sortable()->filter()->paginate(4),
        ]);
    }
}
