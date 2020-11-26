<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Konceiver\MagicLinks\Http\Controllers\MagicLinkController;

Route::get('/login/magic', MagicLinkController::class)
    ->middleware('web')
    ->name('login.magic');
