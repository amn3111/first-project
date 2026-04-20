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