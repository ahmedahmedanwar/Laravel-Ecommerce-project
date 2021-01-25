<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//    Route::get('/', function () {
//        //    return $name;
//    return view('test',[
//        'name'=> request('name')
//
//    ]);
//});

    Route::get('/login', function () {
        //    return $name;
    return view('Login',[


    ]);
});
    Route::post("/login",[UserController::class,'login']);
    Route::get("/",[ProductController::class,'index']);

