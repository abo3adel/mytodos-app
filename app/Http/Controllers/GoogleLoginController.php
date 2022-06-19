<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Exception;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Socialite;

class GoogleLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::driver("google")->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function callback()
    {
        // try {

        $user = Socialite::driver("google")->stateless()->user();

        // dump($user);

        $finduser = User::where("email", $user->getEmail())->first();

        // dump($user->id);

        if ($finduser) {
            $finduser->update([
                'google_id' => $user->getId(),
                'avatar' => $finduser->avatar ?? $user->getAvatar(),
            ]);

            Auth::login($finduser, true);
            // dump($finduser);

            return redirect()->route('home');
        } else {
            $newUser = User::create([
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                'avatar' => $user->getAvatar(),
                "google_id" => $user->getId(),
                "password" => Hash::make(Str::random(6)), // you can change auto generate password here and send it via email but you need to add checking that the user need to change the password for security reasons
            ]);

            // dump("new");
            // dump($newUser);

            // Auth::login($newUser);

            return redirect()->route('home');
        }

        // } catch (Exception $e) {
        //     dump($e->getMessage());
        // }
    }
}
