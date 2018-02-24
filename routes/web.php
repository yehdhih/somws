<?php

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
    return view('home');
});





Route::get('/electricite', function () {
    return view('catalogues.electricite');
});


Route::get('/huiles', function () {
    return view('catalogues.huiles');
});

Route::get('/pompes', function () {
    return view('catalogues.pompes');
});

Route::get('/aciers', function () {
    return view('catalogues.aciers');
});

Route::get('/quincaillerie', function () {
    return view('catalogues.quincaillerie');
});

Route::get('/groupes', function () {
    return view('catalogues.groupes');
});

Route::get('/sika', function () {
    return view('catalogues.sika');
});


Route::get('/contact', function () {
    return view('societe.contact');
});

Route::get('/Quisommesnous', function () {
    return view('societe.Quisommesnous');
});


