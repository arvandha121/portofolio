<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    // Login
    public function loginForm() {
        return view('auth.login');
    }

    // public function login(Request $request) {
    //     $user = User::where('email', $request->email)->first();

    //     if ($user && Hash::check($request->password, $user->password)) {
    //         session(['user_id' => $user->id]);
    //         return redirect('/admin');
    //     }
        
    //     return redirect()->back()->with('error', 'Email atau password tidak cocok');
    // }

    public function login(Request $request) {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email atau password tidak cocok');
        }

        // Generate OTP
        $otp = rand(100000, 999999);

        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(5);
        $user->save();

        // Kirim email OTP
        Mail::to($user->email)->send(new SendOtpMail($otp));

        // Simpan user sementara
        session(['pending_user_id' => $user->id]);

        return redirect()->route('verify.otp.form')
            ->with('success', 'Kode OTP sudah dikirim ke email Anda');
    }

    public function verifyOtpForm() {
        return view('auth.verify-otp');
    }

    public function verifyOtp(Request $request) {
        $request->validate([
            'otp' => 'required|numeric'
        ]);

        $user = User::find(session('pending_user_id'));

        if (!$user) {
            return redirect('/login')->with('error', 'Sesi OTP tidak ditemukan.');
        }

        if ($user->otp_code != $request->otp) {
            return back()->with('error', 'Kode OTP salah.');
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            return back()->with('error', 'Kode OTP sudah kedaluwarsa.');
        }

        // OTP valid → login user
        session(['user_id' => $user->id]);

        // Reset OTP
        $user->otp_code = null;
        $user->otp_expires_at = null;
        $user->save();

        session()->forget('pending_user_id');

        return redirect('/admin')->with('success', 'Login berhasil!');
    }

    public function resendOtp()
    {
        $userId = session('pending_user_id');
        if (!$userId) return redirect('/login')->with('error', 'Sesi OTP tidak valid.');

        $user = User::find($userId);

        // Generate OTP baru
        $otp = rand(100000, 999999);

        $user->otp_code = $otp;
        $user->otp_expires_at = now()->addMinutes(5);
        $user->save();

        Mail::to($user->email)->send(new SendOtpMail($otp));

        return back()->with('success', 'Kode OTP baru telah dikirim.');
    }
    
    // Logout
    public function logout() {
        session()->forget('user_id'); 
        session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
