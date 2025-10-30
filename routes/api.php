<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\SepayWebhookController;

use App\Http\Controllers\API\RegisterController;

Route::post('/webhook/sepay', [SepayWebhookController::class, 'handle'])->name('webhook.sepay');

Route::post('/register', [RegisterController::class, 'handle'])->name('register');