<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BooksController;
use App\Models\Book;

use App\Models\People;
use App\Http\Controllers\PeopleController;


use App\Models\Loan;
use App\Http\Controllers\LoanController;

Route::fallback( function () {
    return "Erro ao localizar a rota";
});

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('books')->group(function(){ 
    Route::get('/', [BooksController::class, 'index'])->name('books-index');
    Route::get('/create', [BooksController::class, 'create'])->name('books-create');
    Route::post('/', [BooksController::class, 'store'])->name('books-store');
    Route::get('/{id}/edit', [BooksController::class, 'edit'])->name('books-edit');
    Route::put('/{id}', [BooksController::class, 'update'])->where('id', '[0-9]+')->name('books-update');
    Route::delete('/{id}', [BooksController::class, 'destroy'])->where('id', '[0-9]+')->name('books-destroy');
});

Route::prefix('people')->group(function(){ 
    Route::get('/', [PeopleController::class, 'index'])->name('people-index');
    Route::get('/create', [PeopleController::class, 'create'])->name('people-create');
    Route::post('/', [PeopleController::class, 'store'])->name('people-store');
    Route::get('/{id}/edit', [PeopleController::class, 'edit'])->name('people-edit');
    Route::put('/{id}', [PeopleController::class, 'update'])->where('id', '[0-9]+')->name('people-update');
    Route::delete('/{id}', [PeopleController::class, 'destroy'])->where('id', '[0-9]+')->name('people-destroy');
});


Route::prefix('loans')->group(function(){ 
    Route::get('/', [LoanController::class, 'index'])->name('loans-index');
    Route::get('/create', [LoanController::class, 'create'])->name('loans-create');
    Route::post('/', [LoanController::class, 'store'])->name('loans-store');
    Route::get('/{id}/edit', [LoanController::class, 'edit'])->name('loans-edit');
    Route::put('/{id}', [LoanController::class, 'update'])->where('id', '[0-9]+')->name('loans-update');
    Route::delete('/{id}', [LoanController::class, 'destroy'])->where('id', '[0-9]+')->name('loans-destroy');
});