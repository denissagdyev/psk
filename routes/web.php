<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Страница "О компании"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты"
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'submit'])->name('contacts.submit');

// Страница новостей
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

// Услуги
Route::get('/service1', function () {
    return view('service1');
})->name('service1');
Route::get('/service2', function () {
    return view('service2');
})->name('service2');
Route::get('/service3', function () {
    return view('service3');
})->name('service3');

// Маршруты для админ-панели (без auth пока)
Route::prefix('admin')->group(function () {
    Route::resource('banners', BannerController::class);
});