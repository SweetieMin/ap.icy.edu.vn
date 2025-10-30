<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function handle(Request $request)
    {
        $payload = $request->all();
        // Ghi log để kiểm tra
        Log::info('Nhận được đăng ký mới', [
            'information' => $payload,
        ]);

        return response()->json(['status' => 'ok'], 200);
    }
}
