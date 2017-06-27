<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){

        $notification = array(
            'message' => 'Welcome to Admin Panel!',
            'alert-type' => 'success'
        );

        return view('admin.index' ,compact('notification'));

    }
}
