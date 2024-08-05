<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'index']);
route::get('/cart',[HomeController::class,'cart']);
route::get('/category',[HomeController::class,'category']);
route::get('/checkout',[HomeController::class,'checkout']);
route::get('/confirmation',[HomeController::class,'confirmation']);
route::get('/tracking',[HomeController::class,'tracking']);
route::get('/single_product',[HomeController::class,'single_product']);
route::get('/contact',[HomeController::class,'contact']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::post('/view_product',[AdminController::class,'view_product']);


route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

