<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::prefix('companies')->middleware('age')->name('companies.')->group(function () {
    Route::prefix('companies')->name('companies.')->group(function () {
        Route::get('', [CompanyController::class, 'index'])->name('index');
        Route::get('create', [CompanyController::class, 'create'])->name('create'); //->middleware('age');
        Route::post('store', [CompanyController::class, 'store'])->name('store');

        Route::delete('delete/{id}', [CompanyController::class, 'delete'])->name('delete');

        Route::get('edit/{id}', [CompanyController::class, 'edit'])->name('edit');

        // Route::put('update/{id}', [CompanyController::class, 'edit'])->name('edit');
        Route::patch('update/{id}', [CompanyController::class, 'update'])->name('update');
        Route::resource('branches', BranchController::class)->except('show');
    });
});

require __DIR__ . '/auth.php';
