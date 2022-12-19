<?php

namespace App\Http\Controllers;

use App\Models\Academic;
use Illuminate\Http\Request;

class AcademicTableController extends Controller
{
    public function index()
    {

        return view('tables.academictable.index', [
            'users' => Academic::sortable()->filter()->paginate(4),
        ]);
    }
}

