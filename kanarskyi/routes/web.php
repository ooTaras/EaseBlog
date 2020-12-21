<?php



 use App\Http\Controllers\generalController; 

Route::get('/', [generalController::class,'home'])->name('home'); // laravel 8.0



Route::get('/add_text', [generalController::class,'add_text'])->name('add_edit');


Route::POST('/edit/chek', [generalController::class,'edit_chek']);

Route::GET('/full/{id}', [generalController::class,'One_text'])->name('show');

Route::GET('/full/{id}/update', [generalController::class,'update'])->name('show_update');

Route::POST('/edit_text/{id}/update', [generalController::class,'update_text'])->name('update_text');

Route::GET('/edit_text/{id}/delete', [generalController::class,'delete_text'])->name('delete_text');



