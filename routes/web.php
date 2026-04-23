<?php

use Illuminate\Support\Facades\Route;

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
    return 'Welcome';
});
Route::get('/products', function () {
    return view('products');
});
use App\Http\Controllers\ItemController;

Route::get('/item', [ItemController::class, 'index']);