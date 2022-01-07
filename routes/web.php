<?php

use App\Http\Livewire\Paginas\Dashboard;
use App\Http\Livewire\Paginas\Tarefas;
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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/tarefas', Tarefas::class)->name('tarefas');
});

require __DIR__.'/auth.php';
