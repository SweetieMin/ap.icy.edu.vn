<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\SepayWebhookController;

Route::post('/webhook/sepay', [SepayWebhookController::class, 'handle'])->name('webhook.sepay');