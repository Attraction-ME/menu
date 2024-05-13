<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckStatus;
use App\Events\OrderSaved;

Auth::routes();

//Route::get('/clear',function(){
//    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
//
//    dd('Done CC!!!');
//});

// Route::get('/test', function () {
    // dd();
// });

Route::get('/', function () {
    return view('website.website');
});

Route::get('/menu', function () {
    return view('website.error');
});

// Error 404
Route::get('/error404', function () {
    return view('website.error404');
});

Route::get('/cart', [App\Http\Controllers\ProductController::class,'cart'])->name('cart');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::get('/get-subtotal', [App\Http\Controllers\ProductController::class, 'getSubtotal'])->name('cart.get-subtotal');

Route::get('/add-to-cart/{id}', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('/update-cart', [App\Http\Controllers\ProductController::class, 'updateCart'])->name('update.cart');
Route::delete('/remove-from-cart', [App\Http\Controllers\ProductController::class, 'remove'])->name('remove.from.cart');
Route::get('/productByCategory', [App\Http\Controllers\ProductController::class, 'productByCategory'])->name('product.category');


Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
// shop
Route::get('/tables/show/{id}', [App\Http\Controllers\TableController::class, 'show'])->name('tables.show');
Route::get('/menu/{slug}', [App\Http\Controllers\ProductController::class, 'shop'])->name('website.shopp');
Route::get('/{slug}', [App\Http\Controllers\ProductController::class, 'welcome'])->name('website.welcome');

// search
Route::post('/search', [App\Http\Controllers\SearchController::class, 'website_search'])->name('website.shop');
Route::get('/searchResult', [App\Http\Controllers\SearchController::class, 'search'])->name('website.searchResult');

// Single Product
Route::get('/product/{id}', [App\Http\Controllers\SingleProduct::class, 'show'])->name('product.show');


///////////////////////////////////



Route::middleware(['customer-auth'])->group(function () {

    Route::get('/profile/{id}', [App\Http\Controllers\CustomerProfileController::class, 'index'])->name('website.profile');

});


// Users Routes
Route::middleware(['auth', 'user-access:user'])->group(function () {
//    Route::get('/', [HomeController::class, 'index'])->name('website.main');
});

// Manager Routes
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');

    // Dashboard owners
    Route::get('/dashboard/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
    Route::get('/dashboard/shop/create', [App\Http\Controllers\ShopController::class, 'create'])->name('shop.create');
    Route::post('/dashboard/shop/store', [App\Http\Controllers\ShopController::class, 'store'])->name('shop.store');
    Route::get('/dashboard/shop/edit/{id}', [App\Http\Controllers\ShopController::class, 'edit'])->name('shop.edit');
    Route::put('/dashboard/shop/update/{id}', [App\Http\Controllers\ShopController::class, 'update'])->name('shop.update');
    Route::delete('/dashboard/shop/destroy/{id}', [App\Http\Controllers\ShopController::class, 'destroy'])->name('shop.destroy');

    Route::get('/dashboard/currency', [App\Http\Controllers\CurrencyController::class, 'index'])->name('currency.index');
    Route::get('/dashboard/currency/create', [App\Http\Controllers\CurrencyController::class, 'create'])->name('currency.create');
    Route::post('/dashboard/currency/store', [App\Http\Controllers\CurrencyController::class, 'store'])->name('currency.store');
    Route::get('/dashboard/currency/edit/{id}', [App\Http\Controllers\CurrencyController::class, 'edit'])->name('currency.edit');
    Route::put('/dashboard/currency/update/{id}', [App\Http\Controllers\CurrencyController::class, 'update'])->name('currency.update');
    Route::delete('/dashboard/currency/destroy/{id}', [App\Http\Controllers\CurrencyController::class, 'destroy'])->name('currency.destroy');



    // Dashboard owners
    Route::get('/dashboard/owners', [App\Http\Controllers\OwnerController::class, 'index'])->name('owners.index');
    Route::get('/dashboard/owners/create', [App\Http\Controllers\OwnerController::class, 'create'])->name('owners.create');
    Route::post('/dashboard/owners/store', [App\Http\Controllers\OwnerController::class, 'store'])->name('owners.store');
    Route::get('/dashboard/owners/edit/{id}', [App\Http\Controllers\OwnerController::class, 'edit'])->name('owners.edit');
    Route::put('/dashboard/owners/update/{id}', [App\Http\Controllers\OwnerController::class, 'update'])->name('owners.update');
    Route::delete('/dashboard/owners/destroy/{id}', [App\Http\Controllers\OwnerController::class, 'destroy'])->name('owners.destroy');

    // Dashboard Blogs
    Route::get('/dashboard/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs.index');
    Route::get('/dashboard/blogs/create', [App\Http\Controllers\BlogController::class, 'create'])->name('blogs.create');
    Route::post('/dashboard/blogs/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blogs.store');
    Route::get('/dashboard/blogs/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/dashboard/blogs/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/dashboard/blogs/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blogs.destroy');


});
######################################################################################################

// Super Admin Routes
Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/superAdmin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('superAdmin.dashboard');

    // Dashboard Products
    Route::get('/dashboard/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/dashboard/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/dashboard/products/store', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/dashboard/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/dashboard/products/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/dashboard/products/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

    // Dashboard Categories
    Route::get('/dashboard/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('/dashboard/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/dashboard/categories/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/dashboard/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/dashboard/categories/update/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/dashboard/categories/destroy/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');

    // Dashboard Tables
    Route::get('/dashboard/tables', [App\Http\Controllers\TableController::class, 'index'])->name('tables.index');
    Route::get('/dashboard/tables/create', [App\Http\Controllers\TableController::class, 'create'])->name('tables.create');
    Route::post('/dashboard/tables/store', [App\Http\Controllers\TableController::class, 'store'])->name('tables.store');
    Route::get('/dashboard/tables/edit/{id}', [App\Http\Controllers\TableController::class, 'edit'])->name('tables.edit');
    Route::put('/dashboard/tables/update/{id}', [App\Http\Controllers\TableController::class, 'update'])->name('tables.update');
    Route::delete('/dashboard/tables/destroy/{id}', [App\Http\Controllers\TableController::class, 'destroy'])->name('tables.destroy');

    Route::get('/generate-qr-code/{id}', [App\Http\Controllers\TableController::class, 'generateQrCode'])->name('generateQrCode.show');


    // Dashboard Clients
    Route::get('/dashboard/waiters', [App\Http\Controllers\WaiterController::class, 'index'])->name('waiters.index');
    Route::get('/dashboard/waiters/create', [App\Http\Controllers\WaiterController::class, 'create'])->name('waiters.create');
    Route::post('/dashboard/waiters/store', [App\Http\Controllers\WaiterController::class, 'store'])->name('waiters.store');
    Route::get('/dashboard/waiters/edit/{id}', [App\Http\Controllers\WaiterController::class, 'edit'])->name('waiters.edit');
    Route::put('/dashboard/waiters/update/{id}', [App\Http\Controllers\WaiterController::class, 'update'])->name('waiters.update');
    Route::delete('/dashboard/waiters/destroy/{id}', [App\Http\Controllers\WaiterController::class, 'destroy'])->name('waiters.destroy');

    // Dashboard Orders
    Route::get('/dashboard/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders.index');
    Route::get('/dashboard/orders/show/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
    Route::post('/get-price',[App\Http\Controllers\OrderController::class, 'getPrice']);
    Route::get('/dashboard/acceptedOrder', [App\Http\Controllers\OrderController::class, 'acceptedOrder'])->name('acceptedOrder.index');
    Route::get('/dashboard/orders/showacceptedOrder/{id}', [App\Http\Controllers\OrderController::class, 'showacceptedOrder'])->name('acceptedOrder.show');
    Route::get('/check-new-orders/{shop_id}', [App\Http\Controllers\OrderController::class, 'checkNewOrders'])->name('check.new.orders');



    // Dashboard sale_invoices
    Route::get('/dashboard/sale_invoices', [App\Http\Controllers\SaleInvoiceController::class, 'index'])->name('sale_invoices.index');
    Route::get('/dashboard/sale_invoices/create', [App\Http\Controllers\SaleInvoiceController::class, 'create'])->name('sale_invoices.create');
    Route::get('/dashboard/sale_invoices/show/{id}', [App\Http\Controllers\SaleInvoiceController::class, 'show'])->name('sale_invoices.show');
    Route::post('/dashboard/sale_invoices/store', [App\Http\Controllers\SaleInvoiceController::class, 'store'])->name('sale_invoices.store');
    Route::delete('/dashboard/sale_invoices/destroy/{id}', [App\Http\Controllers\SaleInvoiceController::class, 'destroy'])->name('sale_invoices.destroy');

    // Dashboard sale_details
    Route::get('/dashboard/purchase_invoices', [App\Http\Controllers\PurchaseInvoiceController::class, 'index'])->name('purchase_invoices.index');
    Route::get('/dashboard/purchase_invoices/create', [App\Http\Controllers\PurchaseInvoiceController::class, 'create'])->name('purchase_invoices.create');
    Route::get('/dashboard/purchase_invoices/show/{id}', [App\Http\Controllers\PurchaseInvoiceController::class, 'show'])->name('purchase_invoices.show');
    Route::post('/dashboard/purchase_invoices/store', [App\Http\Controllers\PurchaseInvoiceController::class, 'store'])->name('purchase_invoices.store');
    Route::delete('/dashboard/purchase_invoices/destroy/{id}', [App\Http\Controllers\PurchaseInvoiceController::class, 'destroy'])->name('purchase_invoices.destroy');
});

Route::middleware(['auth', 'user-access:waiter'])->group(function () {
    Route::get('/waiter/dashboard', [HomeController::class, 'waiterDashboard'])->name('waiter.dashboard');
    Route::get('/check-waiter-orders/{waiter_id}', [App\Http\Controllers\WaiterController::class, 'checkWaiterOrders'])->name('check.waiter.orders');

    // Dashboard Orders
    Route::get('/dashboard/waiter/orders', [App\Http\Controllers\WaiterController::class, 'order'])->name('order.index');
    Route::get('/dashboard/waiter/orders/show/{id}', [App\Http\Controllers\WaiterController::class, 'show'])->name('order.show');
    Route::post('/waiter/get-price',[App\Http\Controllers\WaiterController::class, 'waitergetPrice']);
    Route::get('/dashboard/waiter/acceptedOrder', [App\Http\Controllers\WaiterController::class, 'acceptedOrder'])->name('acceptedOrders.index');
    Route::get('/dashboard/waiter/orders/showacceptedOrder/{id}', [App\Http\Controllers\WaiterController::class, 'showacceptedOrder'])->name('acceptedOrders.show');

    Route::post('/dashboard/waiter/orders/approve', [App\Http\Controllers\WaiterController::class, 'orderapprove'])->name('orderapprove.store');

    });




