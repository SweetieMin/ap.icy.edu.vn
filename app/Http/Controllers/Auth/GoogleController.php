<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Session;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Check if user is already logged in (linking account)
            if (Auth::check()) {
                $currentUser = Auth::user();
                
                // Check if email is already used by another user
                $existingUser = User::where('email', $googleUser->getEmail())
                    ->where('id', '!=', $currentUser->id)
                    ->first();
                
                if ($existingUser) {
                    Session::flash('error', 'Email này đã được sử dụng bởi tài khoản khác.');
                    return redirect()->route('profile');
                }
                
                // Link Google account to current user
                $currentUser->update([
                    'email' => $googleUser->getEmail(),
                    'email_verified_at' => now(), // Auto-verify email from Google
                ]);
                
                // Update avatar if user doesn't have one
                if (!$currentUser->detail || !$currentUser->detail->avatar) {
                    $currentUser->detail()->updateOrCreate(
                        ['user_id' => $currentUser->id],
                        ['avatar' => $googleUser->getAvatar()]
                    );
                }
                
                Session::flash('status', 'Tài khoản đã được liên kết thành công với Google!');
                return redirect()->route('admin.settings.profile');
            }
            
            // User is not logged in - only allow login for existing users
            $user = User::where('email', $googleUser->getEmail())->first();
            
            if ($user) {
                // User exists - update email verification and login
                $user->email_verified_at = now();
                $user->save();
                
                Auth::login($user);
                
                Session::flash('status', 'Đăng nhập thành công với Google!');
                return redirect()->intended(route('dashboard'));
            } else {
                // User doesn't exist - redirect to login with error
                Session::flash('error', 'Không tìm thấy tài khoản với email này. Vui lòng liên hệ quản trị viên để được tạo tài khoản.');
                return redirect()->route('login');
            }
            
        } catch (\Exception $e) {
            Session::flash('error', 'Có lỗi xảy ra khi liên kết với Google: ' . $e->getMessage());
            return redirect()->route('admin.settings.profile');
        }
    }

}
