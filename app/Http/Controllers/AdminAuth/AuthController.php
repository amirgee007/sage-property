<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use function foo\func;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class  AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest' , ['except' => 'logout']);
    }


//    use AuthenticatesUsers;

    protected $redirectTo = 'admin';
    protected $guard = 'admin';


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver('facebook')->user();
        dd($user);
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }


    public function showLoginForm( ){

        if (Auth::user()) {
            return redirect('admin/');
        }
        flash('Sorry! Please try again.')->error();
        return back();
        //show the login form here if you can
    }

        public function logout(){

            Auth::logout();
            flash('Successfully logout !');
            return redirect('/');

    }

}
