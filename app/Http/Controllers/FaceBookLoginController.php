<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\User;
use function foo\func;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FaceBookLoginController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest' , ['except' => 'logout']);
    }


    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('facebook')->user();


        $authUser = User::where('email',$user->email )->first();
        if(!is_null($authUser)){

            auth()->login($authUser);
            return redirect('/');
        }

        $name =  trim(str_replace(' ', '', $user->name));
        $email = trim($user->email);
        return redirect(route('faceBookLogin' , compact('name','email')));
    }

}
