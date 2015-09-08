<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Redirect;
use Laravel\Socialite\Facades\Socialite;


class LinkedinController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('linkedin')->user();
        } catch (Exception $e) {
            return Redirect::to('socialite/linkedin');
        }

        $authUser = User::findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect('/');
    }
}
