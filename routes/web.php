<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoAppointmentController;
// Rutas de Autenticación generadas por Laravel UI
Auth::routes();

// Opcional: Rutas adicionales de tu aplicación
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/demo', function () {
    return view('demo/demo');
});

Route::post('/demo', [DemoAppointmentController::class, 'store'])->name('demo.store');
Route::get('/demo/all', [DemoAppointmentController::class, 'index'])->name('demo.index');

Route::get('/home', function () {
    return view('demo/datatable');
})->name('datatabledemo');




