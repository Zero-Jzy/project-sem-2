<?php

namespace App\Http\Controllers;

use App\Order;
use App\Profile;
use App\User;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginGoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            $existUser = User::where('email',$googleUser->email)->first();

            if($existUser) {
                Auth::loginUsingId($existUser->id);
            }
            else {
                $user = User::create([
                    'email' => $googleUser->email,
                    'password' => bcrypt(rand(1,10000))
                ]);
                $profile = Profile::create([
                    'user_id' => $user->id,
                    'first_name' => $googleUser->user['given_name'],
                    'last_name' => $googleUser->user['family_name'],
                    'avatar' => $googleUser->avatar,
                ]);
                $user->profile()->save($profile);
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/menu/food');
        }
        catch (Exception $e) {
            return 'error';
        }
    }
}
