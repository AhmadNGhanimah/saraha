<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function Redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function Callback($provider)
    {

        $userSocial = Socialite::driver($provider)->stateless()->user();
        $email=$userSocial->getEmail();
        if(empty($email))
            $email=$userSocial->getId().'@'.$provider.'com';

        $users = User::where([$provider.'_id' => $userSocial->getId()])->first();
//        $users = User::where(['email' => $userSocial->getEmail()])->first();
        if ($users) {
            Auth::login($users);
            return redirect()->route('messages');
        } else {
            $user = new User();
            $user->name = $userSocial->getName();
            $user->email = $userSocial->getEmail();

            if ($provider == 'facebook')
                $user->facebook_id = $userSocial->getId();
            else
                $user->google_id = $userSocial->getId();

            $user->random=uniqid();
            $user->save();
            Auth::login($user);

            return redirect()->route('messages');
        }
    }


}
