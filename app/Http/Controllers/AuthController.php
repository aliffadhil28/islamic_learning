<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique',
            'password' => 'required|string|min:8',
            'category' => 'required',
            'username' => 'required',
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'category' => $data['category'],
        ]);
        auth()->login($user);
        return view('welcome');
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
        } else {
            return redirect()->back();
        }
        return view('welcome');
    }
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->flush();
        $req->session()->regenerateToken();
        return redirect()->route('login');
    }
}
