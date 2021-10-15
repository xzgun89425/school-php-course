<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AlbumController;

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

Route::get('/', [IndexController::class, 'index']);

// Route::get('product/{id?}', function ($id=0) {
//     return 'ID='.$id;
// });
Route::get('/album/{id}',[AlbumController::class, 'showAlbumFromID']);

//view 視界,視圖,--直白或口語化->回傳一個頁面or畫面