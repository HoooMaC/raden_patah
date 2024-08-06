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
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function callbackGoogle()
    {
        try {

            $google_user = Socialite::driver('google')->stateless()->user();

            // check from account table
            $account = Account::where('provider_account_id', $google_user->getId())->first();

            // if account exist, check user table. User row should exist
            if ($account) {
                $user = User::where('id', $account->user_account_id)->first();
                // @dd($user);
                if ($user) {
                    Auth::login($user);
                    return redirect()->intended('/');
                }
            }

            // if account doesn't exit then make new account
            $new_user = User::create([
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'username' => $google_user->getName(),
            ]);
            $new_account = Account::create([
                'id' => $new_user->id,
                'type' => 'google',
                'provider' => 'google',
                'provider_account_id' => $google_user->getID(),
                'user_account_id' => $new_user->id,
                // todo complete others
            ]);

            Auth::login($new_user);
            return redirect()->intended('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
