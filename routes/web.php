<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/soldiers', function () {
    return view('soldiers');
})->name('soldiers');

Route::get('/units', function () {
    return view('units');
})->name('units');

Route::get('/3ddy_egmali_fraa_gonood', function () {
    return view('3ddy_egmali_fraa_gonood');
})->name('3ddy_egmali_fraa_gonood');

Route::get('/3ddy_egmali_stage', function () {
    return view('3ddy_egmali_stage');
})->name('3ddy_egmali_stage');

Route::get('/3ddy_egmali_stage_js', function () {
    return view('3ddy_egmali_stage_js');
})->name('3ddy_egmali_stage_js');

Route::get('/3ddy_emdad', function () {
    return view('3ddy_emdad');
})->name('3ddy_emdad');

Route::get('/3ddy_emdad_js', function () {
    return view('3ddy_emdad_js');
})->name('3ddy_emdad_js');

Route::get('/3ddy_f2at_drgat', function () {
    return view('3ddy_f2at_drgat');
})->name('3ddy_f2at_drgat');

Route::get('/3ddy_injured', function () {
    return view('3ddy_injured');
})->name('3ddy_injured');

Route::get('/3ddy_lewa_gonood', function () {
    return view('3ddy_lewa_gonood');
})->name('3ddy_lewa_gonood');

Route::get('/3ddy_mla7k', function () {
    return view('3ddy_mla7k');
})->name('3ddy_mla7k');

Route::get('/3ddy_mla7k_dual', function () {
    return view('3ddy_mla7k_dual');
})->name('3ddy_mla7k_dual');

Route::get('/3ddy_mla7k_js', function () {
    return view('3ddy_mla7k_js');
})->name('3ddy_mla7k_js');

Route::get('/3ddy_mla7k_total', function () {
    return view('3ddy_mla7k_total');
})->name('3ddy_mla7k_total');

Route::get('/3ddy_rotab_gonood', function () {
    return view('3ddy_rotab_gonood');
})->name('3ddy_rotab_gonood');

Route::get('/3ddy_rotab_rateb', function () {
    return view('3ddy_rotab_rateb');
})->name('3ddy_rotab_rateb');

Route::get('/rateb3aly', function () {
    return view('rateb3aly');
})->name('rateb3aly');

Route::get('/weapons', function () {
    return view('weapons');
})->name('weapons');



Route::get('/specialtie', function () {
    return view('specialtie');
})->name('specialtie');




Route::get('/Trainingcenters', function () {
    return view('Trainingcenters');
})->name('Trainingcenters');



Route::get('/government', function () {
    return view('government');
})->name('government');





Route::get('/Alldata', function () {
    return view('Alldata');
})->name('Alldata');





Route::get('/place', function () {
    return view('place');
})->name('place');



Route::get('/Addjob', function () {
    return view('Addjob');
})->name('Addjob');





Route::get('/Viewall', function () {
    return view('Viewall');
})->name('Viewall');




// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });