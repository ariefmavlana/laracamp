<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.user.login');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $callback = Socialite::driver('google')->user();
        $data = [
            'name' => $callback->getName(),
            'email' => $callback->getEmail(),
            'avatar' => $callback->getAvatar(),
            'email_verified_at' => now(),
        ];

        $shortenedUrl = Str::limit($data['avatar'], 255, '');  // Remove the '...' suffix
        $user = User::firstOrCreate(
            ['email' => $data['email']],
            array_merge($data, ['avatar' => $shortenedUrl])
        );
        Auth::login($user, true);

        return redirect(route('welcome'));
    }
}
