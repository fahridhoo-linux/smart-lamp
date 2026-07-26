<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LampController;
use App\Http\Controllers\EnergyUsageController;
use App\Http\Controllers\SensorDataController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/lamps', [LampController::class, 'index'])
        ->name('lamps.index');

    Route::get('/energy', [EnergyUsageController::class, 'index'])
        ->name('energy.index');

    Route::get('/sensor-data', [SensorDataController::class, 'index'])
        ->name('sensor.index');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy'); 

});

require __DIR__.'/auth.php';