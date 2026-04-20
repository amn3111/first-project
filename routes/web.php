<?php

use Illuminate\Support\Facades\Route;

function Firstcode() {
    return "Welcome To Laravel";
}

Route::get('/first', function () {
    return Firstcode();
});