<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
   public function student_data($st_name, $phone, $bus_no)
    {
        return "Name is $st_name Age is $phone Years Degree is $bus_no";
    }
}