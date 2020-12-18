<?php


use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\Dashboard;
use App\Http\Controllers\Front\Homepage;
use Illuminate\Support\Facades\Route;


// Back Routes

Route::get('/admin/panel', [Dashboard::class, 'index'])->name('admin.dashboard');
Route::get('/admin/giris', [AuthController::class, 'login'])->name('admin.login');
Route::post('/admin/giris', [AuthController::class, 'loginPost'])->name('admin.login.post');
Route::get('/admin/cikis', [AuthController::class, 'logout'])->name('admin.logout');





// Front Routes

Route::get('/', [Homepage::class, 'index'])->name('homepage');
Route::get('/sayfa', [Homepage::class, 'index']);
Route::get('/kategori/{category}', [Homepage::class, 'category'])->name('category');
Route::get('{category}/{slug}', [Homepage::class, 'single'])->name('single');
Route::get('/contact', [Homepage::class, 'contact'])->name('contact');
Route::post('/contact', [Homepage::class, 'contactpost'])->name('contact.post');
