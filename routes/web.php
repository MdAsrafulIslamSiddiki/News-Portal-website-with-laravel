<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\DashboardController;



Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::middleware('auth')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');
    Route::get('/log-out', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('admin.settings');

    // news routes
    Route::get('/all-news', [NewsController::class, 'all_news'] )->name('news.all');
    Route::get('/add-news', [NewsController::class, 'add_news'] )->name('news.add');
    Route::post('/store-news', [NewsController::class, 'store_news'] )->name('news.store');
    Route::get('/delete-news/{id}', [NewsController::class, 'delete_news'])->name('news.delete');
    Route::patch('/update-news/{id}', [NewsController::class, 'update_news'])->name('news.update');
    
});
