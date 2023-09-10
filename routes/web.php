<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClintController;
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
Route::get('/hello', function () {

      return view('start.start');
  });
//user
Route::get('/register',[RegisterController::class,'registration'])->name('register')->middleware('alreadyLoggedInuser');
Route::get('/registerlog',[RegisterController::class,'registrationlog'])->name('registerlog')->middleware('alreadyLoggedInuser');
Route::post('/register-user',[RegisterController::class,'user'])->name('userform');
Route::post('/registerlogin-user',[RegisterController::class,'login'])->name('registrationform');
Route::get('/dashboarduser',[RegisterController::class,'dashboard'])->name('dashboarduser')->middleware('isLoggedInuser');//user page
Route::get('/logoutuser',[RegisterController::class,'logout']);
//admin
Route::post('/registerlogin-admin',[LoginController::class,'login'])->name('loginform');
Route::get('/dashboardadmin',[LoginController::class,'dashboard'])->middleware('isLoggedIn');//admin page
Route::get('/logadmin',[LoginController::class,'loginn'])->name('login')->middleware('alreadyLoggedIn');
Route::get('/logout',[LoginController::class,'logout']);

////////////////////////////////////////////////////////////////////////////
//adminside
//product in admin
Route::view('/products/create','create')->name('create');
Route::get('/products',[ProductController::class,'index'])->name('index');
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('destroy');
Route::get('/products/update/{id}',[ProductController::class,'update'])->name('update');
Route::put('/products/edit/{id}',[ProductController::class,'edit'])->name('edit');
Route::post('/products/store',[ProductController::class,'store'])->name('store');
Route::get('/search',[ProductController::class,'search']);
//admins in admin
Route::get('/admins',[AdminController::class,'index'])->name('indexadmin');
Route::view('/admins/create','createadmin')->name('createadmin');
Route::delete('/admins/{id}',[AdminController::class,'destroy'])->name('destroyadmin');
Route::get('/admins/update/{id}',[AdminController::class,'update'])->name('updateadmin');
Route::put('/admins/edit/{id}',[AdminController::class,'edit'])->name('editadmin');
Route::post('/admins/store',[AdminController::class,'store'])->name('storeadmin');
//user in admin
Route::get('/users',[ClintController::class,'index'])->name('indexuser');
Route::view('/users/create','createuser')->name('createuser');
Route::delete('/users/{id}',[ClintController::class,'destroy'])->name('destroyuser');
Route::post('/users/store',[ClintController::class,'store'])->name('storeuser');
Route::get('/searchuser',[ClintController::class,'searchuser'])->name('searchuser');
//catigory in admin
Route::get('/categoryies',[CategoryController::class,'index'])->name('indexcategory');
Route::view('/categoryies/create','createcategory')->name('createcategory');
Route::delete('/categoryies/{id}',[CategoryController::class,'destroy'])->name('destroycategory');
Route::post('/categoryies/store',[CategoryController::class,'store'])->name('storecategory');
Route::get('/categoryiesproduct/{id}',[CategoryController::class,'show'])->name('categoryiesproduct');
//orders in admin
Route::get('/orders',[OrderController::class,'index'])->name('indexorder');
Route::view('/orders/create','createorder')->name('createcorder');
Route::get('/orders/{id}',[OrderController::class,'show'])->name('showorder');

///////////////////////////////////////////////////////////////////////////////////
//userside
//edit in user
Route::get('/updateuser',[ClintController::class,'update'])->name('updateuser');
Route::put('/users/edit/{id}',[ClintController::class,'edit'])->name('edituser');
//show user orders in userprofile
Route::get('/showuser',[ClintController::class,'show'])->name('show');
//cart
Route::get('/', [ProductsController::class, 'index'])->name('products');
Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');
Route::delete('/cart/delete/{id}',[ProductsController::class, 'delete'])->name('cart.delete');
Route::delete('/cart/{id}',[ProductsController::class,'destroy'])->name('destroycart');
Route::get('/search2',[ProductController::class,'search2']);
Route::post('/cart/store',[ProductsController::class,'store'])->name('storecart');
