<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'select']);
Route::get('/all', [PostController::class, 'select']);
Route::get('/gaming', [PostController::class, 'gaming']);
Route::get('/technology', [PostController::class, 'technology']);
Route::get('/life', [PostController::class, 'life']);
Route::get('/post{id?}', [PostController::class, 'show']);
