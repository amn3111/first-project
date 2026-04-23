<?php

use App\Http\Controllers\EcommerceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
Route::get('/cars', [EcommerceController::class, 'List_Car']);
Route::get('/company', [CompanyController::class, 'cmp']);
Route::get('/company2', [CompanyController::class, 'camps']);
Route::get('/depts', [CompanyController::class, 'my_depts']);

function Firstcode() {
    return "Welcome To Laravel";
}

Route::get('/first', function () {
    return Firstcode();
});
function show($name) {
    return $name;
}

Route::get('/show/{name}', function ($name) {
    return show($name);
});
function add($num1, $num2) {
    return $num1 + $num2;
}

Route::get('/add/{num1}/{num2}', function ($num1, $num2) {
    return add($num1, $num2);
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products');
});
use App\Http\Controllers\ItemController;

Route::get('/item', [ItemController::class, 'index']);

function print_data($name, $age) {
    return "Name is $name and Age is $age";
}

Route::get('/print_data/{name}/{age}', function ($name, $age) {
    return print_data($name, $age);
});

function student_data($st_name, $phone, $bus_no) {
    return "Name: $st_name , Phone: $phone , Bus No: $bus_no";
}

Route::get('/student/{st_name}/{phone}/{bus_no}', function ($st_name, $phone, $bus_no) {
    return student_data($st_name, $phone, $bus_no);
});


