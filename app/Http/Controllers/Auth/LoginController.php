<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showForm()
    {
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.orders');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Bukan admin');
            }
        } 
        
        return back()->with('error', 'Email atau password salah');
    }
}