<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        $google_user = Socialite::driver('google')->user();

        // check from account table
        $account = Account::where('user_id', $google_user->getId())->first();

        // if account exist, check user table. User row should exist
        if ($account) {
            $user = User::where('id', $account->user_id)->first();
            if ($user) {
                Auth::login($user);
                return redirect()->intended('/');
            }
        }

        // if account doesn't exit then make new account
        $new_user = User::create([
            'name' => $google_user->getName(),
            'email' => $google_user->getName(),
        ]);
        $new_account = Account::create([
            'user_id' => $new_user->id,
            // todo complete others
        ]);

        Auth::login($user);
        return redirect()->intended('/');
    }
}
