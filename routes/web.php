<?php

use App\Models\User;
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

use App\Http\Controllers\CookieController;


Route::get('/', [CookieController::class,'index']);

Route::get('/cookies/fazer-pedido', [CookieController::class,'fazerpedido']);

Route::post('pedidos', [CookieController::class,'store']);
