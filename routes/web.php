<?php


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LocaleController;

use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Profile\ProfilePasswordController;
use App\Http\Controllers\Profile\ProfilePhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\EmployeeController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\Admin\TokoController;
use App\Http\Controllers\Member\OrdersController;





// Route::prefix('member')->group(function () {
//     Route::get('/orders', [OrdersController::class, 'index'])->name('member.orders.index');
//     Route::post('/insertorder', [OrdersController::class, 'insertorder'])->name('insertorder');
//   Route::get('/member/tambahorder', [OrdersController::class, 'tambahorder'])->name('member.tambahorder');
//   Route::post('/insertorder', [OrdersController::class, 'insertorder'])->name('store_order');
//   Route::get('/orders/{id}/show', [OrdersController::class, 'tampilkandata'])->name('order.show');
//   Route::put('/orders/{id}/update', [OrdersController::class, 'updatedata'])->name('order.update');
//   Route::get('/member/dataorder', [OrdersController::class, 'index'])->name('member.dataorder.index');
//   Route::delete('/orders/{id}/delete', [OrdersController::class, 'delete'])->name('order.delete');

//     // Lakukan sesuatu dengan variabel $orders, misalnya lewatkan ke view
// });





    // Tambahkan route lainnya jika diperlukan




use Illuminate\Http\Request;

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

// Home route
Route::get('/', function () {
    return view('landing');
})->middleware('language');

// Auth routes
Route::group(['middleware' => 'language'], function () {
    Route::get('login', [LoginController::class, 'show'])->name('login.show')->middleware('islogin');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
    Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');

    Route::get('register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('register', [RegisterController::class, 'register'])->name('register.register');
    Route::get('register-admin', [RegisterController::class, 'registerAdminView'])->name('register.admin');
    Route::post('register-admin', [RegisterController::class, 'registerAdmin'])->name('register.register_admin');
});

// User profile routes
Route::group([
    'prefix' => 'profile',
    'middleware' => ['language', 'islogin'],
], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/photo/delete', [ProfilePhotoController::class, 'destroy'])->name('profile.photo.destroy');
    Route::patch('/password', [ProfilePasswordController::class, 'update'])->name('profile.password.update');
});

// Set language route
Route::get('/{locale}', LocaleController::class);

//tambah
Route::get('/tambahpelanggan',[EmployeeController::class, 'member.tambahpelanggan'])->name('member.tambahpelanggan');
Route::get('/tambahdata',[EmployeeController::class, 'member.tambahdata'])->name('member.tambahdata');
//
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('member.pelanggan');
//
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');




// produk
// Route::get('/pesanan', [AdminProductController::class, 'list'])->name('admin.pesanan.list');




Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin/toko', [TokoController::class, 'index'])->name('admin.toko.index');
    Route::get('/admin/tambah-produk', [TokoController::class, 'tambahProduk'])->name('admin.tambah-produk');
    Route::post('/admin/insert-data', [TokoController::class, 'insertData'])->name('admin.insert-data');
    Route::get('/admin/tampilkan-data/{id}', [TokoController::class, 'tampilkanData'])->name('admin.tampilkan-data');
    Route::delete('/admin/products/{id}', [TokoController::class, 'deleteData'])->name('admin.delete-product');
    Route::put('/admin/products/{id}', [TokoController::class, 'updateData'])->name('admin.update-product');
});














//
// Route::resource('mahasiswa', mahasiswaController::class);

