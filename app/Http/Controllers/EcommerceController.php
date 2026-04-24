<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function List_Car()
    {
        $mycar = [
            [
                'name' => 'Toyota',
                'price' => 50000,
                'brand' => 'Toyota',
                'status' => 'New',
                'image' => 'car2.png'
            ],
            [
                'name' => 'BMW',
                'price' => 120000,
                'brand' => 'BMW',
                'status' => 'Used',
                'image' => 'car3.png'
            ]
                
            ];

        return view('cars', compact('mycar'));
    }
}