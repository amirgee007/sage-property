<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;
use App\User;
use function foo\func;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class  AuthController extends Controller
{

    public function __construct()
    {
//        $this->middleware('guest' , ['except' => 'logout']);
    }


    use AuthenticatesUsers;

    protected $redirectTo = 'admin';
    protected $guard = 'admin';



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
