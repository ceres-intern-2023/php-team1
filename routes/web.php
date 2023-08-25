<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPageController;

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

Route::get('/mypage', [App\Http\Controllers\MyPageController::class, 'mypage']);
/*Route::get('/mypage', [App\Http\Controllers\MyPageController::class, 'AnimalIndex']);*/
Route::get('/mypage', function () {
    return view('mypage');
})->middleware(['auth'])->name('mypage');

require __DIR__.'/auth.php';
