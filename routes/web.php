<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Site\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('/all',[HomeController::class,'all'])->name('site.result.all');
Route::get('/bien/{uuid}',[HomeCOntroller::class,'bien'])->name('site.bien.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::redirect('dashboard', 'tableau-bord');
Route::middleware('auth')->prefix('tableau-bord')->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('tableau.index');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::controller(BienController::class)->prefix('biens')->name('bien.')->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/all','all')->name('all');
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
    });

});

require __DIR__.'/auth.php';
