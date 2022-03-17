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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('Frontpage');
Route::get('/pizza/{id}', [App\Http\Controllers\FrontController::class, 'show'])->name('pizza.show');
Route::post('/order/store', [App\Http\Controllers\FrontController::class, 'store'])->name('order.store');



Route::group(['prefix'=>'admin','middleware'=>['Auth','admin']],function(){
    //pizza
    Route::get('/pizza', [App\Http\Controllers\PizzaController::class, 'index'])->name('pizza.index');
    Route::get('/pizza/create', [App\Http\Controllers\PizzaController::class, 'create'])->name('pizza.create');
    Route::post('/pizza/store', [App\Http\Controllers\PizzaController::class, 'store'])->name('pizza.store');
    Route::get('/pizza/{id}/edit', [App\Http\Controllers\PizzaController::class, 'edit'])->name('pizza.edit');
    Route::put('/pizza/{id}/update', [App\Http\Controllers\PizzaController::class, 'update'])->name('pizza.update');
    Route::get('/pizza/{id}/delete', [App\Http\Controllers\PizzaController::class, 'delete'])->name('pizza.delete');
    Route::delete('/pizza/{id}/destroy', [App\Http\Controllers\PizzaController::class, 'destroy'])->name('pizza.destroy');

    //orders
    Route::get('/users/orders', [App\Http\Controllers\UserOrderController::class, 'index'])->name('Users.Orders');
    Route::post('/users/{id}/status', [App\Http\Controllers\UserOrderController::class, 'changeStatus'])->name('Order.status');
    Route::get('/users', [App\Http\Controllers\UserOrderController::class, 'users'])->name('Users');
});
