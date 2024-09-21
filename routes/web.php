<?php


use Src\Http\Route;
use App\Controllers\HomeController;

// Route::get('/', function () {
//     echo "Hello";
// });

Route::get('/', [HomeController::class, 'index']);



