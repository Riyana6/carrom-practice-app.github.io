<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singles', function () {
    $data=App\single::all();
    return view('singles')->with('singles',$data);
});

Route::get('/doubles', function () {
    $data=App\doubles::all();
    return view('doubles')->with('doubles',$data);
});

Route::post('/savesingles','singlescontroller@store');
Route::post('/savedoubles','doublescontroller@store');

Route::get('/deletedouble/{id}','doublescontroller@deletedouble');
Route::get('/updatedouble/{id}','doublescontroller@updatedoubleview');
Route::post('/updatedoubles','doublescontroller@updatedouble');

Route::get('/deletesingle/{id}','singlescontroller@deletesingle');
Route::get('/updatesingle/{id}','singlescontroller@updatesingleview');
Route::post('/updatesingles','singlescontroller@updatesingle');