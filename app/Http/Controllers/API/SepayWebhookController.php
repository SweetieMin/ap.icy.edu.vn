<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\TuitionRepositoryInterface;

class SepayWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $apiKey = trim($request->header('Authorization'));
        $expected = 'Apikey ' . trim(env('SEPAY_SECRET_KEY'));

        if ($apiKey !== $expected) {
            Log::warning('Sepay Webhook - Invalid API Key', [
                'received' => $apiKey,
                'expected' => $expected
            ]);
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $payload = $request->all();

        $content = $payload['content'] ?? '';
        $transferAmount = $payload['transferAmount'] ?? 0;

        // ✅ Tách bằng dấu chấm
        $parts = explode('.', $content);

        // ✅ Chỉ lấy 4 phần: TRIHD, WI25, IW, 6905e5c66dc5a
        $transactionCode = implode('.', array_slice($parts, 3, 4));

        // ✅ Cắt khoảng trắng nếu có gì thừa
        $transactionCode = preg_split('/\s+/', $transactionCode)[0];

        // ✅ Loại bỏ chấm thừa
        $transactionCode = rtrim($transactionCode, '.');

        Log::info('Sepay Webhook - Payload nhận được', [
            'original_content' => $content,
            'parsed_transaction_code' => $transactionCode,
            'transferAmount' => $transferAmount,
        ]);

        app(TuitionRepositoryInterface::class)->updateStatus($transactionCode, $transferAmount);

        return response()->json(['status' => 'ok'], 200);
    }
}
