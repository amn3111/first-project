<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
     public function List_Car()
    {
        $mycar = ['BMW', 'Toyota', 'Mercedes', 'Kia', 'Honda'];

        return view('cars', compact('mycar'));
    }
}
    //

