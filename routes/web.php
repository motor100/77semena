<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainnewController;
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


Route::get('/crud', [MainController::class, 'crud']);

Route::get('/novosti/create', [MainnewController::class, 'create'])->name('novosti-create');

Route::post('/novosti/store', [MainnewController::class, 'store'])->name('novosti-store');

Route::get('/novosti/{id}/edit', [MainnewController::class, 'edit'])->name('novosti-edit');


// /dashboard/tinyfileupload // в файле tiny-file-upload.js



Route::get('/', [MainController::class, 'home']) -> name('home');

Route::get('/catalog', [MainController::class, 'catalog']);

Route::get('/o-kompanii', [MainController::class, 'o_kompanii']);

Route::get('/dostavka-i-oplata', [MainController::class, 'dostavka_i_oplata']);

Route::get('/novosti', [MainController::class, 'novosti']);

Route::get('/novosti/{slug}', [MainController::class, 'single_novosti']);

Route::get('/otzyvy', [MainController::class, 'otzyvy']);

Route::get('/kontakty', [MainController::class, 'kontakty']);

Route::get('/cart', [MainController::class, 'cart']);

Route::get('/clear-cart', [MainController::class, 'clear_cart']);

Route::get('/poisk', [MainController::class, 'poisk']);


Route::get('/catalog/single-product', [MainController::class, 'single_product']);



Route::get('/stat-partnerom', [MainController::class, 'stat_partnerom']);

Route::get('/politika-konfidencialnosti', [MainController::class, 'politika_konfidencialnosti']);

Route::get('/polzovatelskoe-soglashenie-s-publichnoj-ofertoj', [MainController::class, 'polzovatelskoe_soglashenie_s_publichnoj_ofertoj']);

Route::get('/garantiya-vozvrata-denezhnyh-sredstv', [MainController::class, 'garantiya_vozvrata_denezhnyh_sredstv']);

Route::get('/dokumenty', [MainController::class, 'dokumenty']);


// temp

Route::get('/novinki', [MainController::class, 'novinki']);

Route::get('/peppers', [MainController::class, 'peppers']);

Route::get('/tomatoes', [MainController::class, 'tomatoes']);

Route::get('/cucumbers', [MainController::class, 'cucumbers']);

Route::get('/chemicals', [MainController::class, 'chemicals']);


Route::post('/ajax/testimonial', [MainController::class, 'ajax_testimonial']);


/*
Route::middleware('can:view-dashboard')->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'home']);
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

});
*/

// Route::get('/dashboard', function () {
//     return view('dashboard.home');
// })->middleware('auth:admin');

// Route::get('/siteadmin', function () {
//     return view('dashboard.home');
// })->middleware('auth:admin');




// Route::get('/profile', function () {
//     return view('welcome');
// })->middleware(['auth:web2']);

// Админ панель
/*
Route::middleware('auth:admin')->group(function () {

    // Route::get('/dashboard', [AdminController::class, 'hidden_products']);



    Route::get('/dashboard', function () {
        return view('dashboard.home');
    });

});
*/

// Route::get('/dashboard', [AdminController::class, 'home']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('auth:web2');

// Route::get('/three', function () {
//     return view('three');
// })->middleware(['auth:web2']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('profile', [\App\Http\Controllers\SiteController::class, 'profile'])
        ->middleware('password.confirm')
        ->name('profile');
});


/*
Route::middleware('can:view-account')->group(function () {
    // Route::get('/dashboard', [AdminController::class, 'home']);
    Route::get('/account', function () {
        return view('account');
    });

});
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
