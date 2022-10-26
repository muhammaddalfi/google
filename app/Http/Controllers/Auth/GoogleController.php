<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            //code...
            $user = Socialite::driver('google')->user();
            $findUser = User::where('email', $user->getEmail())->first();

            if ($findUser) {
                $findUser->google_id = $user->getId();
                $findUser->update();

                Auth::login($findUser);
                return redirect()->route('dashboard');
            } else {
                // dd($user->id);
                // $newUser = User::create([
                //     'email' => $user->getEmail(),
                //     'google_id' => $user->getId(),
                // ]);
                echo 'Anda blm terdaftar';


                // Auth::login($newUser);
                // return redirect()->route('dashboard');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
