<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class GoogleController extends Controller
{
    public function googlepage()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googlecallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if a user exists with the same google_id
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {
                // If user with google_id exists, log them in
                Auth::login($finduser);
                return redirect()->intended('dashboard');
            }

            // Check if a user exists with the same email but no google_id
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                // Update the user's google_id
                $existingUser->update([
                    'google_id' => $user->id,
                ]);

                Auth::login($existingUser);
                return redirect()->intended('dashboard');
            }

            // Create a new user if no matching email or google_id is found
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => encrypt('123456dummy'),
            ]);

            Auth::login($newUser);
            return redirect()->intended('dashboard');

        } catch (Exception $e) {
            return redirect('/login')->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

}
