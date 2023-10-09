<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Admin\AdminProfileController;

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

Auth::routes();

//user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','user'])->name('home');


/** ============================== Admin all route start ================================== */
Route::prefix('admin')->middleware(['auth','admin'])->group(function(){

    //admin dashboard
    Route::get('/dashboard',[AdminController::class,'index']);

    //admin profile
    Route::get('/profile',[AdminProfileController::class,'adminProfile'])->name('admin.profile');
    Route::get('/profile/edit',[AdminProfileController::class,'adminProfileEdit'])->name('admin.profile.edit');
    Route::post('/profile/update',[AdminProfileController::class,'adminProfileUpdate'])->name('admin.profile.update');


    //admin password
    Route::get('/password/change',[AdminProfileController::class,'adminPasswordChange'])->name('admin.password.change');
    Route::post('/password/update',[AdminProfileController::class,'adminPasswordUpdate'])->name('admin.password.update');

    //category
    Route::get('/category/add',[CategoryController::class,'addCategory'])->name('admin.category.add');
    Route::post('/category/store',[CategoryController::class,'storeCategory'])->name('admin.category.store');
    Route::get('/category/manage',[CategoryController::class,'manageCategory'])->name('admin.category.manage');
    Route::get('/category/edit/{id}',[CategoryController::class,'editCategory'])->name('admin.category.edit');
    Route::post('/category/update',[CategoryController::class,'updateCategory'])->name('admin.category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'deleteCategory'])->name('admin.category.delete');


    //brand
    Route::get('/brand/add',[BrandController::class,'addBrand'])->name('admin.brand.add');
    Route::post('/brand/store',[BrandController::class,'storeBrand'])->name('admin.brand.store');
    Route::get('/brand/manage',[BrandController::class,'manageBrand'])->name('admin.brand.manage');
    Route::get('/brand/edit/{id}',[BrandController::class,'editBrand'])->name('admin.brand.edit');
    Route::post('/brand/update',[BrandController::class,'updateBrand'])->name('admin.brand.update');
    Route::get('/brand/delete/{id}',[BrandController::class,'deleteBrand'])->name('admin.brand.delete');


    //product
    Route::get('/product/add',[ProductController::class,'addProduct'])->name('admin.product.add');
    Route::post('/product/store',[ProductController::class,'storeProduct'])->name('admin.product.store');
    Route::get('/product/manage',[ProductController::class,'manageProduct'])->name('admin.product.manage');
    Route::get('/product/filter/by-status',[ProductController::class,'filterByStatus']);
    Route::get('/product/filter/by-category',[ProductController::class,'filterBycategory']);
    Route::get('/product/deactive/{id}',[ProductController::class,'deactiveProduct'])->name('admin.product.deactive');
    Route::get('/product/active/{id}',[ProductController::class,'activeProduct'])->name('admin.product.active');

});

/** ============================== Admin all route end  ================================== */



//employee
Route::prefix('employee')->middleware(['auth','employee'])->group(function(){

    Route::get('/dashboard',[EmployeeController::class,'index']);
});

