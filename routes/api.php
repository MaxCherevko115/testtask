<?php

use App\Http\Controllers\Package\PackagesController;
use Illuminate\Support\Facades\Route;

Route::post('/package', [PackagesController::class, 'create']);
