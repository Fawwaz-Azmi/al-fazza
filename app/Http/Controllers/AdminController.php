<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(Request $request) {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(route('content.index'));
 // Replace with your desired dashboard route
        }
        return view('admin.login');
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'user' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended(route('content.index'));
        }
        return back()->withErrors([
            'email' => 'Credentials salah.',
        ]);
    }

    public function logout(Request $request) {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }
}
