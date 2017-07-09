<?php

namespace App\Http\Controllers;

use App\UserQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserQuestionController extends Controller
{
    public  function storeQuestions(Request $request){

        try {
////////////////////////////////////todo: Make 2 columns in data base to avoid complexity of code

            if (Auth::check()){
                $userQs1 = UserQuestion::firstOrNew([
                    'user_id' =>Auth::user()->id ,
                    'question' => 'monthlySalary' ,
                ]);
                $userQs1->answer = $request->monthlySalary;
                $userQs1->save();


                $userQs2 = UserQuestion::firstOrNew([
                    'user_id' =>Auth::user()->id ,
                    'question' => 'propertyType' ,
                ]);

                $userQs2->answer= $request->propertyType;
                $userQs2->save();
            }

            $userPropertiesShow = true;

            flash('Questions Recorded Successfully !')->warning();

//            return view('front-end.index', [
//                'userPropertiesShow' => $userPropertiesShow
//            ]);


            return back()->with('userPropertiesShow', ['yes']);


        } catch (\Exception $ex) {
            session()->flash('app_error', $ex->getMessage());
            return back();
        }

    }

    public function test(){

        $data = null;
        if (Auth::check()){
            $qs = Auth::user()->userQuestions;
                if(!is_null($qs)) {
                    $data[$qs[0]->question] = $qs[0]->answer;
                    $data[$qs[1]->question] = $qs[1]->answer;
                }
        }
        return $data;
    }


}
