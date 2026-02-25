<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Routing\Route;

Route::post('/login', [AuthController::class, 'login']);
