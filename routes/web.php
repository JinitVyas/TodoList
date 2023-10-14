<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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

Route::get('/', [ItemController::class,'showItem'] );

Route::post('/Add', [ItemController::class, 'addItem'] );
Route::get('/Delete/{id}', [ItemController::class, 'deleteItem'] );
Route::get('/Edit/{id}', [ItemController::class, 'editItemForm'] );
Route::put('/Edit/{id}', [ItemController::class, 'editItem'] );
