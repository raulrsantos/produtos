<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Products;
use App\Http\Controllers\Products as Product;

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


Route::get('/', [Product::class, 'home']);
Route::get('/{product}', [Product::class, 'detail']);

// Route::get('/', function () {
//     return view('produtos/home');
// });

// Route::get('/{product}', function () {
//     return view('produtos/detail');
// });



//Orienta sobre qual código de verificação vai utilizar
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    //adiciona a rota (http://127.0.0.1:8000/products)
    Route::get('/products', Products::class)->name('products');

});



