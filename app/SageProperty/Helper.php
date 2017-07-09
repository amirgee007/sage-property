<?php
namespace App\SageProperty;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class Helper
{

    public static function hasSetQuestions(){

        $response =  false;

        if (Auth::check()){
            count(Auth::user()->userQuestions)==0 ? $response = true : $response = false;

        }
        return $response;
    }

    public static function getMonthlySalaryQs(){

        $data = null;
        if (Auth::check()){
            $qs = Auth::user()->userQuestions->pluck( 'answer' ,'question')->toArray();
            $data =($qs['monthlySalary']);

        }
        return $data;

    }
    public static function getpropertyTypeQs(){
        $data = null;
        if (Auth::check()){
            $qs = Auth::user()->userQuestions->pluck( 'answer' ,'question')->toArray();
            $data = ($qs['propertyType']);

        }
        return $data;
    }



}

