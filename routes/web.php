<?php

use App\Http\Controllers\ApiProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ApiProductsController::class, 'index']);

// sezioni varie
Route::get('/men', [ApiProductsController::class, 'men']);
Route::get('/women', [ApiProductsController::class, 'women']);
Route::get('/jewelery', [ApiProductsController::class, 'jewelery']);
Route::get('/electronics', [ApiProductsController::class, 'electronics']);
Route::get("/product/{product}", [ApiProductsController::class, 'product'])->name("product.single");

// carrello view
Route::get("/cart", [CartController::class, "show"])->middleware(['auth', 'verified'])->name("cart.show");

// aggiungi al carrello
// Route::get("/add-to-cart/{product}", [CartController::class, "addToCart"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
