<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MainnewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




use App\Http\Controllers\Admin\AdminController;




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

Route::get('/poisk', [MainController::class, 'poisk']);


Route::get('/catalog/single-product', [MainController::class, 'single_product']);



// Корзина
Route::post('/ajax/addtocart', [MainController::class, 'ajax_addtocart']);

Route::post('/ajax/rmfromcart', [MainController::class, 'ajax_rmfromcart']);

Route::post('/ajax/minuscart', [MainController::class, 'ajax_minuscart']);

Route::post('/ajax/pluscart', [MainController::class, 'ajax_pluscart']);

Route::post('/ajax/updatecart', [MainController::class, 'ajax_updatecart']);

Route::post('/ajax/sessionfresh', [MainController::class, 'ajax_sessionfresh']);

Route::get('/clear-cart', [MainController::class, 'clear_cart']);




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




require __DIR__.'/auth.php';





// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('dashboard', [ProfileController::class, 'home'])->name('dashboard');

//     Route::get('profile', [ProfileController::class, 'home'])
//         ->middleware('password.confirm')
//         ->name('profile');
// });



Route::get('dashboard', [AdminController::class, 'home']);

Route::get('dashboard/testimonials', [AdminController::class, 'testimonials']);

Route::post('dashboard/publicate-testimonial', [AdminController::class, 'publicate_testimonial']);

Route::post('dashboard/delete-testimonial', [AdminController::class, 'delete_testimonial']);




Route::get('dashboard/products', [ProductController::class, 'index']);

Route::get('dashboard/products/create', [ProductController::class, 'create'])->name('product-create');

Route::post('dashboard/products/store', [ProductController::class, 'store'])->name('product-store');

Route::get('dashboard/products/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');

Route::post('dashboard/products/update', [ProductController::class, 'update'])->name('product-update');

Route::get('dashboard/products/{id}/destroy', [ProductController::class, 'destroy'])->name('product-destroy');




Route::get('dashboard/novosti', [MainnewController::class, 'index']);

Route::get('dashboard/novosti/create', [MainnewController::class, 'create'])->name('novosti-create');

Route::post('dashboard/novosti/store', [MainnewController::class, 'store'])->name('novosti-store');

Route::get('dashboard/novosti/{id}/edit', [MainnewController::class, 'edit'])->name('novosti-edit');

Route::post('dashboard/novosti/update', [MainnewController::class, 'update'])->name('novosti-update');

Route::get('dashboard/novosti/{id}/destroy', [MainnewController::class, 'destroy'])->name('novosti-destroy');




Route::get('dashboard/o-kompanii', [AdminController::class, 'o_kompanii']);

Route::post('dashboard/o-kompanii-update', [AdminController::class, 'o_kompanii_update']);

Route::get('dashboard/stat-partnerom', [AdminController::class, 'stat_partnerom']);

Route::post('dashboard/stat-partnerom-update', [AdminController::class, 'stat_partnerom_update']);




Route::post('/dashboard/tinyfileupload', [AdminController::class, 'tiny_file_upload']);



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









Route::fallback([AdminController::class, 'dashboard_404']);
