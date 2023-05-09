<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

/*
Route::get('/books', [BooksController::class, ' index']);

Route::get('/home', function () {
    return view('welcome');
})->name('home-index');
 
*/

//grupo de rotas

Route::prefix('books')->group(function(){ 
    Route::get('/', [BooksController::class, 'index'])->name('books-index');
    Route::get('/create', [BooksController::class, 'create'])->name('books-create');
    Route::post('/', [BooksController::class, 'store'])->name('books-store');
    Route::get('/{id}/edit', [BooksController::class, 'edit'])->name('books-edit');
    Route::put('/{id}', [BooksController::class, 'update'])->where('id', '[0-9]+')->name('books-update');
    Route::delete('/{id}', [BooksController::class, 'destroy'])->where('id', '[0-9]+')->name('books-destroy');
});



Route::get('/', function () {
    return view('welcome');
});

Route::fallback( function () {
    return "Erro ao localizar a rota";
});



