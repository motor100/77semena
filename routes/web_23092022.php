<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/o-kompanii', [MainController::class, 'o_kompanii']);

Route::get('/dostavka-i-oplata', [MainController::class, 'dostavka_i_oplata']);

Route::get('/novosti', [MainController::class, 'novosti']);

Route::get('/novosti/{slug}', [MainController::class, 'single_novosti']);

Route::get('/otzyvy', [MainController::class, 'otzyvy']);

Route::get('/kontakty', [MainController::class, 'kontakty']);

Route::get('/politika-konfidencialnosti', [MainController::class, 'politika_konfidencialnosti']);



Route::middleware('can:view-dashboard')->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'home']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

});

Route::middleware('can:view-account')->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'home']);
    Route::get('/account', function () {
        return view('account');
    });

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
