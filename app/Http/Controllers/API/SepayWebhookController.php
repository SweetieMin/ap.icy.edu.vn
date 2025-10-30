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
            Log::warning('Sepay Webhook - Invalid API Key', ['received' => $apiKey, 'expected' => $expected]);
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $payload = $request->all();

        $content = $payload['content'] ?? '';
        $transferAmount = $payload['transferAmount'] ?? 0;

        // ✅ Chuẩn hóa: lấy phần giữa dấu . thứ 3 và dấu . thứ 4
        $parts = explode('.', $content);
        $normalizedContent = isset($parts[3]) ? trim($parts[3]) : $content;

        // ✅ Lấy mã giao dịch trước dấu '-'
        $transactionCodeParts = explode('-', $normalizedContent);
        $transactionCode = trim($transactionCodeParts[0]);

        // Ghi log để kiểm tra
        Log::info('Sepay Webhook - Payload nhận được', [
            'original_content' => $content,
            'normalized_content' => $normalizedContent,
            'transaction_code' => $transactionCode,
            'transferAmount' => $transferAmount,
        ]);

        // Gọi repository để cập nhật theo transaction code
        app(TuitionRepositoryInterface::class)->updateStatus($transactionCode, $transferAmount);

        return response()->json(['status' => 'ok'], 200);
    }
}
