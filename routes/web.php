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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactusController;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbeledugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelandfriendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
    Route::get('/kabi-islamic-books', [ProductController::class, 'kabi']);
    Route::get('/marbel-junior', [ProductController::class, 'marbeljunior']);
    Route::get('/keong-casual-games', [ProductController::class, 'keonggames']);
});

Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{id}', [NewsController::class, 'idnews']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'programkarir']);
    Route::get('/magang', [ProgramController::class, 'programmagang']);
    Route::get('/kunjungan-indistri', [ProgramController::class, 'programkunjunganindustri']);
});

Route::get('/about-us', function () {
    echo redirect ("https://www.educastudio.com/contact-us");
});

Route::resource('contact-us', ContactUsController::class);