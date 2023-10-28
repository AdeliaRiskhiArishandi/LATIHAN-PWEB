<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Universitas Teknokrat Indonesia",
        "image" => "teknokrat.jpg",
        "description" => "Universitas Teknokrat Indonesia merupakan salah satu perguruan tinggi swasta di Bandar Lampung, Lampung yang berdiri pada bulan Februari 1986 dengan nama awal (Kursus dan Bimbingan Teknokrat). Perguruan Tinggi ini dikelola oleh Yayasan Pendidikan Teknokrat."
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});