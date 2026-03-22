<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    // 1. Munculin Form
    public function showLinkRequestForm()
    {
        return view('pages.auth.forgot-password');
    }

    // 2. Logika Kirim Email (Sederhana dulu)
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        // Nanti di sini logikanya: Cek user -> Bikin Token -> Kirim Email
        // Untuk sekarang kita kasih feedback sukses dulu biar UI-nya kelihatan jalan
        return back()->with('status', 'Kami telah mengirimkan link reset ke email kamu!');
    }
}
