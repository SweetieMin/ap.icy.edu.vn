<div>
    <flux:modal wire:poll='checkPaymentStatus()' name="qr-bank-transfer" class="max-w-5xl">
        <div class="space-y-6">
            <!-- Header -->
            <div>
                <div class="flex items-center mb-4">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center mr-3">
                        <flux:icon.building-office class="w-5 h-5 text-white" />
                    </div>
                    <div>
                        <flux:heading size="lg">Thông tin chuyển khoản</flux:heading>
                        <flux:text class="mt-1">Quét QR hoặc chuyển khoản thủ công</flux:text>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <!-- Left Side - QR Code -->
                <div class="flex flex-col items-center">
                    <div class="relative">
                        <!-- QR Code Container -->
                        <div
                            class="w-80 h-80 bg-white rounded-2xl shadow-2xl border-4 border-gray-100 p-8 relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 opacity-50">
                            </div>

                            <!-- QR Code Placeholder -->
                            <div
                                class="relative z-10 w-full h-full bg-white rounded-xl shadow-inner flex items-center justify-center border-2 border-dashed border-gray-300">
                                <div class="text-center">
                                    @if ($crc16 && !empty($crc16))
                                        {!! \SimpleSoftwareIO\QrCode\Facades\QrCode::size(200)->encoding('UTF-8')->errorCorrection('M')->generate($crc16) !!}
                                    @else
                                        <div
                                            class="w-24 h-24 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                                            <flux:icon.qr-code class="w-12 h-12 text-white" />
                                        </div>
                                        <p class="text-sm font-medium text-gray-600 mb-1">QR Code</p>
                                        <p class="text-xs text-gray-500">Đang tải...</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Decorative Elements -->
                            <div class="absolute top-4 right-4 w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                            <div class="absolute bottom-4 left-4 w-2 h-2 bg-blue-400 rounded-full"></div>
                        </div>

                        <!-- QR Code Info -->
                        <div class="mt-6 text-center">
                            <div
                                class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-green-50 to-emerald-50 rounded-full border border-green-200">
                                <flux:icon.device-phone-mobile class="w-4 h-4 text-green-600 mr-2" />
                                <span class="text-sm font-medium text-green-700">Hỗ trợ tất cả app ngân hàng</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3 pt-6 justify-center">
                            <flux:button icon:trailing="loading" variant="ghost"
                                class="px-6 border border-gray-300 hover:bg-gray-50">
                                Chờ thanh toán...
                            </flux:button>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Bank Transfer Info -->
                <div class="space-y-6">
                    <!-- Amount Card -->
                    <div class="relative overflow-hidden">
                        <div
                            class="bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 rounded-2xl p-6 text-white shadow-xl">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-white opacity-10 rounded-full -translate-y-16 translate-x-16">
                            </div>
                            <div class="relative z-10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-emerald-100 text-sm font-medium mb-2">Số tiền cần chuyển</p>
                                        <p class="text-3xl font-bold">{{ number_format($amount ?? 0, 0, ',', '.') }}</p>
                                        <p class="text-emerald-100 text-lg font-semibold">VNĐ</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bank Information -->
                    <div class="space-y-2">


                        <div class="space-y-3">
                            <!-- Bank Name -->
                            <div
                                class="group bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 hover:border-blue-200">
                                <div class="flex items-center justify-between">
                                    <flux:input icon="building-office" value="{{ $bankName ?? '' }}" readonly/>
                                </div>
                            </div>

                            <!-- Account Number -->
                            <div
                                class="group bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 hover:border-green-200">
                                <div class="flex items-center justify-between">
                                    <flux:input icon="credit-card" value="{{ $accountNumber ?? '' }}" readonly copyable/>
                                </div>
                            </div>

                            <!-- Account Name -->
                            <div
                                class="group bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 hover:border-purple-200">
                                <div class="flex items-center justify-between">
                                    <flux:input icon="user" value="{{ $accountName ?? '' }}" readonly/>
                                </div>
                            </div>

                            <!-- Transfer Content -->
                            <div
                                class="group bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-200 hover:border-orange-200">
                                <div class="flex items-center justify-between">
                                    <flux:input icon="document-text" value="{{ $contentTransaction ?? '' }}" readonly copyable />
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>



        </div>
    </flux:modal>

</div>
