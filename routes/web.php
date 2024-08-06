<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/category', [HomeController::class, 'category']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/confirmation', [HomeController::class, 'confirmation']);
Route::get('/tracking', [HomeController::class, 'tracking']);
Route::get('/single_product', [HomeController::class, 'single_product']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/view_category', [AdminController::class, 'view_category']);
Route::post('/add_category', [AdminController::class, 'add_category']);
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);
Route::get('/view_product', [AdminController::class, 'view_product']);
Route::post('/add_product', [AdminController::class, 'add_product']);

Route::get('/show_product', [AdminController::class, 'show_product']);

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);