<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

/*Route::view('/product/terrasnaja-doska-cm-decking', 'terrasnaja-doska-cm-decking')
    ->name('tdpk');*/

Route::group(['prefix' => 'product'], function() {
    Route::view('terrasnaja-doska-cm-decking', 'terrasnaja-doska-cm-decking')
        ->name('tdpk');

    Route::view('fasadnaya-oblicovka-iz-dpk', 'fasadnaya-oblicovka-iz-dpk')
        ->name('fasaddpk');

    Route::view('perila-i-ograzhdeniya-iz-dpk', 'perila-i-ograzhdeniya-iz-dpk')
        ->name('periladpk');
});
