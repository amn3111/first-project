<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_data($st_name, $phone, $bus_no)
    {
        return "Name: $st_name Phone: $phone Bus No: $bus_no";
    }
}
