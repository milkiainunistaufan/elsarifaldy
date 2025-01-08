<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\InvitationSlideController;

Route::get('/', [InvitationController::class, 'index']);
Route::get('/slide', [InvitationSlideController::class, 'index']);
