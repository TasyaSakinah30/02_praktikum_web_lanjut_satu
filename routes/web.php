<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PageController;
use App\http\Controllers\HomeController;
use App\http\Controllers\AboutController;
use App\http\Controllers\ArticleController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\ProgramController;
use App\http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// PRAKTIKUM 1
// Route::get('/', function () {
//     echo "Selamat Datang";
// });
    
// Route::get('/about', function () {
//     echo "Tasya Rachmah Sakinah - 1941720105";
// });
    
// Route::get('/articles/{id}', function ($id) {
//     echo "Halaman Artikel dengan ID :" . $id;
// });

// PRAKTIKUM 2
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// PRAKTIKUM 3
Route::get('/', [HomeController::class, 'index']);

Route::prefix('category') -> group(function() {
    Route::get('/marbel-edu-games', [CategoryController::class, 'eduGames']);
    Route::get('/marbel-and-friends-kids-games', [CategoryController::class, 'kidsGames']);
    Route::get('/riri-story-books', [CategoryController::class, 'books']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'songs']);
});

Route::get('/news', function() {
    echo 'Halaman News - <a href="https://www.educastudio.com/news"> Klik disini</a>';
});

Route::get('/news/{title}', function($title) {
    echo 'Artikel : ' . $title . ' - <a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19"> Klik disini</a>';
});

Route::prefix('program') -> group(function() {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjunganindustri', [ProgramController::class, 'kunjunganindustri']);
});

Route::get('/about us', function() {
    echo 'About Us <a href="https://www.educastudio.com/about-us"> Klik disini</a>';    
});

Route::resource('/contact-us', ContactController::class, ['only' => ['index', 'store']]);
// Route::resource('/input', ContactController::class, ['only' => ['index']]);
// Route::resource('/admin', ContactController::class, ['only' => ['store']]);