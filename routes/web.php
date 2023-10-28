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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Universitas Teknokrat Indonesia",
        "image" => "teknokrat.jpg",
        "description" => "Universitas Teknokrat Indonesia merupakan salah satu perguruan tinggi swasta di Bandar Lampung, Lampung yang berdiri pada bulan Februari 1986 dengan nama awal (Kursus dan Bimbingan Teknokrat). Perguruan Tinggi ini dikelola oleh Yayasan Pendidikan Teknokrat."
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post",
            "author" => "Universitas Teknokrat Indonesia",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente culpa, veritatis voluptate minus laudantium at maxime voluptatem, odit exercitationem ipsum dignissimos unde perferendis ratione praesentium ipsam sint error aliquam adipisci quo nulla sit laborum cum excepturi soluta. Incidunt, distinctio provident labore, dicta eaque itaque sint debitis accusamus et iusto optio praesentium. Obcaecati, repudiandae! Voluptas ducimus porro excepturi itaque minima quae ipsa autem hic beatae repellat deleniti veniam exercitationem rem debitis modi, dolorum ratione, dicta omnis aspernatur perferendis sequi quod labore."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});