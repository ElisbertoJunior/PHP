<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);




// Route::get('/', [ProductController::class, 'index'])->name('product.index');
// Route::get('/product/{id?}', [ProductController::class, 'show'])->name('product.show');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function() {
//     return view('empresa');
// });


// Route::get('/produto/{id}', function($id) {
//     return "O id do produto e: ".$id;
// });

// //redirecionar
// //Route::redirect('/sobre', '/empresa');
// Route::get('/sobre', function() {
//     return redirect('empresa');
// });

// Route::get('/news', function() {
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function() {
//     return redirect()->route('noticias');
// });

// //grupo de rotas
// Route::prefix('admin')->group(function() {

//     Route::get('/deschboard', function() {
//         return "deschbosrd";
//     });

//     Route::get('/users', function() {
//         return "users";
//     });

//     Route::get('/clientes', function() {
//         return "clientes";
//     });
// });

