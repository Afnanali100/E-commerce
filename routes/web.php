<?php
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Category;
use App\Models\Admin;
use App\Models\OrderedProdect;
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

Route::get('/welcome', function () {
    return view('welcome');
});


// Admin

//products

Route::resource('admin/products', AdminProductController::class);
Route::get('admin/products', [AdminProductController::class, 'index'])->name('products.index');
Route::get('admin/products/show/{id}', [AdminProductController::class, 'show'])->name('products.show');
Route::delete('admin/products/delete/{id}', [AdminProductController::class, 'destroy'])->name('products.destroy');
Route::get('admin/products/edit/{id}', [AdminProductController::class, 'edit'])->name('products.edit');
Route::get('admin/products/create', [AdminProductController::class, 'create'])->name('products.create');
Route::put('admin/products/update/{id}', [AdminProductController::class, 'update'])->name('products.update');
Route::post('admin/products/store', [AdminProductController::class, 'store'])->name('products.store');




//users
Route::resource('admin/users', AdminUserController::class);
Route::get('admin/users', [AdminUserController::class, 'index'])->name('users.index');
Route::get('admin/users/show/{id}', [AdminUserController::class, 'show'])->name('users.show');
Route::delete('admin/users/delete/{id}', [AdminUserController::class, 'destroy'])->name('users.destroy');
Route::get('admin/users/edit/{id}', [AdminUserController::class, 'edit'])->name('users.edit');
Route::get('admin/users/create', [AdminUserController::class, 'create'])->name('users.create');
Route::put('admin/users/update/{id}', [AdminUserController::class, 'update'])->name('users.update');
Route::post('admin/users/store', [AdminUserController::class, 'store'])->name('users.store');


//order
Route::resource('admin/orders', AdminOrderController::class);
Route::get('admin/orders', [AdminOrderController::class, 'index'])->name('orders.index');
Route::get('admin/orders/show/{id}', [AdminOrderController::class, 'show'])->name('orders.show');
Route::delete('admin/orders/delete/{id}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');
Route::get('admin/orders/edit/{id}', [AdminOrderController::class, 'edit'])->name('orders.edit');
Route::get('admin/orders/create', [AdminOrderController::class, 'create'])->name('orders.create');
Route::put('admin/orders/update/{id}', [AdminOrderController::class, 'update'])->name('orders.update');
Route::post('admin/orders/store', [AdminOrderController::class, 'store'])->name('orders.store');


//category
Route::resource('admin/categories', AdminCategoryController::class);

Route::get('admin/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
Route::get('admin/categories/show/{id}', [AdminCategoryController::class, 'show'])->name('categories.show');
Route::delete('admin/categories/delete/{id}', [AdminCategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('admin/categories/edit/{id}', [AdminCategoryController::class, 'edit'])->name('categories.edit');
Route::get('admin/categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
Route::put('admin/categories/update/{id}', [AdminCategoryController::class, 'update'])->name('categories.update');
Route::post('admin/categories/store', [AdminCategoryController::class, 'store'])->name('categories.store');



// users
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/show', [UserProfileController::class, 'show'])->name('profile.show');

    Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
 Route::put('/profile/update', [UserProfileController::class, 'update'])->name('profile.update');

 Route::get('/searchinput', function () {
    return view('profile/searchinput');
})->name('profile.searchinput');
Route::get('/profile/search',[AdminProductController::class, 'search'])->name('profile.search');






