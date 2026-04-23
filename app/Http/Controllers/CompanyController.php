<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function cmp()
    {
        return view('company')
            ->with('name', 'Amna')
            ->with('age', 22);
    }
}
