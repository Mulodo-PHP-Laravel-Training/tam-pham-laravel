<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Redirect;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return Redirect::to('socialite/twitter');
        }

        //because twitter app don't return email, so i create email to insert DB
        $user->email = 'twitter@gmail.com';
        
        $authUser = User::findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('/');
    }
}
