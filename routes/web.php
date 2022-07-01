<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Masterdata\OwnerController;
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

// Route dashboard laravel terbaru
// Route::get('/', 'App\Http\Controllers\DashboardController@index')->name('home');
// or
Route::get('/', [DashboardController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\DashboardController@index')->name('home');
// or
Route::get('/home', [DashboardController::class, 'index'])->name('home');

// Route::group(['namespace' => 'Masterdata','prefix' => 'master'], function(){

//     Route::group(['prefix' => 'owner'], function(){
//          Route::get('/', ['as' => 'master.owner', 'uses' => OwnerController::class, 'index']);
//          Route::get('/create', ['as'=> 'master.owner.create', 'uses' => 'OwnerController@create']);
//          Route::post('/store', ['as'=> 'master.owner.store', 'uses' => 'OwnerController@store']);
//          Route::get('/edit/{id}', ['as'=> 'master.owner.edit', 'uses' => 'OwnerController@edit']);
//          Route::patch('/update/{id}', ['as'=> 'master.owner.update', 'uses' => 'OwnerController@update']);
//          Route::delete('/destroy/{id}', ['as'=> 'master.owner.destroy', 'uses' => 'OwnerController@destroy']);
//     });
// });

Route::prefix('owner')->group(function () {
    Route::get('/', [OwnerController::class, 'index'])-> name('master.owner');
    Route::get('/create', [OwnerController::class, 'create'])-> name('master.owner.create');
    Route::post('/store', [OwnerController::class, 'store'])-> name('master.owner.store');
    Route::get('/edit/{id}', [OwnerController::class, 'edit'])-> name('master.owner.edit');
    Route::patch('/update/{id}', [OwnerController::class, 'update'])-> name('master.owner.update');
    Route::delete('/destroy/{id}', [OwnerController::class, 'destroy'])-> name('master.owner.destroy');
});