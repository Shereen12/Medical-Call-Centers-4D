<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AllUsersController;

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

Route::get('/', [UsersController::class, 'index']);

Route::post('/user/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/login', [AuthController::class, 'loginIndex']);

Route::get('/new-user', [UsersController::class, 'create']);

Route::post('/users/create', [UsersController::class, 'store']);

Route::get('/allusers', [AllUsersController::class, 'getAllUsers']);

Route::get('/user/{id}', [UsersController::class, 'show']);
