<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StorehouseController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\OrderHistoryController;
use App\Http\Controllers\Frontend\ShoppingCartController;
use App\Http\Controllers\Frontend\FrontendIndexController;





/**===============================Frontend all route============================== */
//home page
Route::get('/',[FrontendIndexController::class,'index']);

//product single page
Route::get('/product/single/{id}',[FrontendIndexController::class,'productSingle'])->name('product.single');

//product add to cart
Route::post('/product/add-to/cart',[ShoppingCartController::class,'productAddtoCart'])->name('product.add.cart');

//view shopping cart product
Route::get('/cart-product/view',[ShoppingCartController::class,'cartProductView'])->middleware(['auth','user'])->name('cart-product.view');

//product quantity increment
Route::post('/quantity/increment',[ShoppingCartController::class,'incrementQuantity']);

//product quantity decrement
Route::post('/quantity/decrement',[ShoppingCartController::class,'decrementQuantity']);

//delete cart item
Route::get('/cart-item/delete',[ShoppingCartController::class,'cartItemDelete']);

//empty cart item
Route::get('/cart/empty',[ShoppingCartController::class,'emptyCart']);

//checkout page
Route::get('/checkout/page',[CheckoutController::class,'checkout'])->middleware('auth');

//order place
Route::post('/place/order',[CheckoutController::class,'placeOrder'])->name('place.order');
/**===============================Frontend all route end============================== */


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
    Route::get('/product/details/{id}',[ProductController::class,'detailsProduct'])->name('admin.product.details');
    Route::get('/product/edit/{id}',[ProductController::class,'editProduct'])->name('admin.product.edit');
    Route::get('/product/image/delete/{id}',[ProductController::class,'deleteProductImage'])->name('admin.product-image.delete');
    Route::post('/product/update',[ProductController::class,'updateProduct'])->name('admin.product.update');
    Route::get('/product/delete/{id}',[ProductController::class,'deleteProduct'])->name('admin.product.delete');


    //admin chat with employee
    Route::get('/chat/employee',[MessageController::class,'chatWithEmployee'])->name('admin.chat.employee');
    Route::get('/message/show/{id}',[MessageController::class,'show'])->name('admin.message.show');


    //order history
    Route::get('/order/history',[OrderHistoryController::class,'index'])->name('admin.order.history');
    Route::get('/order/details/{id}',[OrderHistoryController::class,'orderDetails'])->name('admin.order.details');
    Route::get('/delivery/status/one/{id}',[OrderHistoryController::class,'changeDeliveryStatusToOne'])->name('admin.delivery-status.toOne');



    //store house
    Route::get('/storehouse/add',[StorehouseController::class,'addStorehouse'])->name('admin.storehouse.add');
    Route::post('/storehouse/store',[StorehouseController::class,'saveStorehouse'])->name('admin.storehouse.store');
    Route::get('/storehouse/manage',[StorehouseController::class,'manageStorehouse'])->name('admin.storehouse.manage');
    Route::get('/storehouse/edit/{id}',[StorehouseController::class,'editStorehouse'])->name('admin.storehouse.edit');
    Route::post('/storehouse/update',[StorehouseController::class,'updateStorehouse'])->name('admin.storehouse.update');
    Route::get('/storehouse/delete/{id}',[StorehouseController::class,'deleteStorehouse'])->name('admin.storehouse.delete');


    //state
    Route::get('/state/add',[StateController::class,'addState'])->name('admin.state.add');
    Route::post('/state/store',[StateController::class,'storeState'])->name('admin.state.store');
    Route::get('/state/manage',[StateController::class,'manageState'])->name('admin.state.manage');
    Route::get('/state/edit/{id}',[StateController::class,'editState'])->name('admin.state.edit');
    Route::post('/state/update',[StateController::class,'updateState'])->name('admin.state.update');
    Route::get('/state/delete/{id}',[StateController::class,'deleteState'])->name('admin.state.delete');



});

//message sent from employee
Route::post('/message/sent/from/user',[MessageController::class,'sentFromUser'])->name('message.sent-from.user');



/** ============================== Admin all route end  ================================== */



 /**===================== employee start============================================= */
Route::prefix('employee')->middleware(['auth','employee'])->group(function(){

    Route::get('/dashboard',[EmployeeController::class,'index']);

 Route::get('/chat/with/admin',[MessageController::class,'chatWithAdmin'])->name('chat.with.admin');
 });
 /**===================== employee end================================ */

