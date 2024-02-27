<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CashTransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CryptoTransactionController;
use App\Http\Controllers\ONUSTransactionController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\StatisticController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Middleware\IfAlreadyLogin;
use App\Livewire\ClassifyComponent;
use App\Livewire\MeComponent;
use App\Livewire\SiteComponent;
use App\Livewire\StatisticComponent;
use App\Livewire\Transaction;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'middleware' => [IfAlreadyLogin::class]], static function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/redirect', [AuthController::class, 'redirect'])->name('redirect');
    Route::get('/callback', [AuthController::class, 'callback'])->name('callback');
});

Route::group(['middleware' => [AuthenticateMiddleware::class]], function () {
    Route::get('/', SiteComponent::class)->name('index');
    Route::get('/me', MeComponent::class)->name('me');
    Route::get('/market', [SiteComponent::class, 'market'])->name('market');

    Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function () {
        Route::get('/', Transaction\IndexComponent::class)->name('index');
        Route::get('/cash/{transaction?}', Transaction\CashComponent::class)->name('cash');
        Route::get('/onus/{transaction?}', Transaction\ONUSComponent::class)->name('onus');
        Route::get('/crypto/{transaction?}', Transaction\CryptoComponent::class)->name('crypto');
    });

    Route::group(['prefix' => 'classify', 'as' => 'classify.'], function () {
        Route::get('/', ClassifyComponent::class)->name('index');
        Route::post('/store-image', [ClassifyComponent::class, 'storeImage'])->name('image.store');
        Route::post('/store-category', [ClassifyComponent::class, 'storeCategory'])->name('category.store');
        Route::post('/store-reason', [ClassifyComponent::class, 'storeReason'])->name('reason.store');
    });

    Route::group(['prefix' => 'statistic', 'as' => 'statistic.'], function () {
        Route::get('/', StatisticComponent::class)->name('index');
        Route::get('/fetch', [StatisticComponent::class, 'fetch'])->name('fetch');
    });

});
