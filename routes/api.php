<?php

use App\Http\Controllers\StateController;
use App\Http\Controllers\TownshipController;

Route::get('/states', StateController::class);
Route::get('/townships', TownshipController::class);
