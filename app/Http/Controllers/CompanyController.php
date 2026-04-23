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

    public function camps()
    {
        return view('company', [
            'name' => 'Amna',
            'age' => 22
        ]);
    }

    public function my_depts()
    {
        $d1 = "IT";
        $d2 = "HR";
        $d3 = "Finance";
        $d4 = "Marketing";

        return view('depts', compact('d1', 'd2', 'd3', 'd4'));
    }
}