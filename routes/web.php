<?php


use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhaseController;


Route::controller(ProjetController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/projet/create', 'create');
    Route::get('/projet/{id}', 'show');
    Route::get('/projet/{id}/edit', 'edit');


    Route::post('/projet', 'store');
    Route::patch('/projet/{id}', 'update');
    Route::delete('/projet/{id}', 'destroy');

});

// Route::controller(PhaseController::class)->group(function () {

//     Route::get('/', 'index');
//     Route::get('/phase/create', 'create');
//     Route::get('/phase/{idPhase}', 'show');
//     Route::get('/phase/{idPhase}/edit', 'edit');


//     Route::post('/phase', 'store');
//     Route::patch('/phase/{idPhase}', 'update');
//     Route::delete('/phase/{idPhase}', 'destroy');

// });


