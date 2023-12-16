<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        // dd($googleUser);
        $user = User::updateOrCreate(
            ['email' => $googleUser->email],
            [
                'name' => $googleUser->name,
            ]
        );

        Auth::login($user);
        return view('welcome');
    }
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function facebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        // dd($googleUser);
        $user = User::updateOrCreate(
            ['email' => $facebookUser->email],
            [
                'name' => $facebookUser->name,
            ]
        );

        Auth::login($user);
        return view('welcome');
    }
}
