<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;


Route::redirect('/','/note')->name('dashboard');

Route::middleware(['auth','verified'])->group(function(){
/*Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create'); // Show form to create a note
Route::post('/note', [NoteController::class, 'store'])->name('note.store');         // Save a new note
Route::get('/note/{note}', [NoteController::class, 'show'])->name('note.show');     // Display a specific note
Route::get('/note/{note}/edit', [NoteController::class, 'edit'])->name('note.edit'); // Show form to edit a note
Route::put('/note/{note}', [NoteController::class, 'update'])->name('note.update');  // Update an existing note
Route::delete('/note/{note}', [NoteController::class, 'destroy'])->name('note.destroy'); // Delete a note*/

Route::resource('note',NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
