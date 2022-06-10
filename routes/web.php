<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    // users
    Route::group(['prefix' => 'users'], function($router) {
        $router->get('/', [UserController::class,'index'])->name('users');
        $router->post('/', [UserController::class,'store']);
        $router->put('/{$id}', [UserController::class,'update']);
        $router->delete('/{$id}', [UserController::class,'destroy']);
    });

    // business

    Route::resource('business', BusinessController::class)->names('business');

});
