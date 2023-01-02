<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MainnewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\OfficeController;
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

Route::get('/catalog/{slug}', [MainController::class, 'single_product']);

Route::get('/o-kompanii', [MainController::class, 'o_kompanii']);

Route::get('/dostavka-i-oplata', [MainController::class, 'dostavka_i_oplata']);

Route::get('/novosti', [MainController::class, 'novosti']);

Route::get('/novosti/{slug}', [MainController::class, 'single_novosti']);

Route::get('/otzyvy', [MainController::class, 'otzyvy']);

Route::get('/kontakty', [MainController::class, 'kontakty']);

Route::get('/cart', [MainController::class, 'cart']);

Route::post('/order-handler', [MainController::class, 'order_handler']);

Route::get('/poisk', [MainController::class, 'poisk']);

Route::get('/novinki', [MainController::class, 'novinki']);

Route::get('/akcii', [MainController::class, 'akcii']);

Route::get('/thankyou', [MainController::class, 'thankyou'])->name('thankyou');


// Корзина
Route::post('/ajax/addtocart', [MainController::class, 'ajax_addtocart']);

Route::post('/ajax/rmitemfromcart', [MainController::class, 'ajax_rmitemfromcart']);

Route::post('/rmfromcart', [MainController::class, 'rmfromcart']);

Route::post('/ajax/minuscart', [MainController::class, 'ajax_minuscart']);

Route::post('/ajax/pluscart', [MainController::class, 'ajax_pluscart']);

// Route::post('/ajax/updatecart', [MainController::class, 'ajax_updatecart']);

// Route::post('/ajax/sessionfresh', [MainController::class, 'ajax_sessionfresh']);

Route::get('/clear-cart', [MainController::class, 'clear_cart']);


Route::get('/stat-partnerom', [MainController::class, 'stat_partnerom']);

Route::get('/politika-konfidencialnosti', [MainController::class, 'politika_konfidencialnosti']);

Route::get('/polzovatelskoe-soglashenie-s-publichnoj-ofertoj', [MainController::class, 'polzovatelskoe_soglashenie_s_publichnoj_ofertoj']);

Route::get('/garantiya-vozvrata-denezhnyh-sredstv', [MainController::class, 'garantiya_vozvrata_denezhnyh_sredstv']);

Route::get('/dokumenty', [MainController::class, 'dokumenty']);


// ajax
Route::post('/ajax/search', [MainController::class, 'ajax_search']);

Route::post('/ajax/testimonial', [MainController::class, 'ajax_testimonial']);

Route::post('/ajax/productsviewmore', [MainController::class, 'ajax_productsviewmore']);

Route::post('/ajax/productsfilter', [MainController::class, 'ajax_productsfilter']);


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





Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [ProfileController::class, 'home'])->name('dashboard');

    Route::get('profile', [ProfileController::class, 'home'])
        ->middleware('password.confirm')
        ->name('profile');
});



// profile
Route::get('profile', [ProfileController::class, 'home']);

Route::get('calc', [ProfileController::class, 'calc']);

Route::get('profile/done-orders', [ProfileController::class, 'done_orders']);




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
