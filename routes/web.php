<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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



Route::get('/', [HomeController::class, 'index']);

Route::resource('/tasks', TaskController::class)
    ->missing(function (Request $request) {
        return Redirect::route('tasks.index');
    });;

Route::name('users.')->group(function (){
    Route::prefix('/user')->group(function (){
        Route::get('/index', [UserController::class, 'index'])->name('index');
        Route::get('/{id}/show', [UserController::class, 'show'])->name('show');
        Route::post('/create', [UserController::class, 'create'])->name('create');
        Route::post('/auth', [UserController::class, 'auth'])->name('auth');
        Route::delete('/delete', [UserController::class, 'delete'])->name('delete');
    });
});

