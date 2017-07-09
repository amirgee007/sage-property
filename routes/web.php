<?php


Route::get('/test', function () {

    return \App\SageProperty\Helper::getMonthlySalaryQs();
});



Route::get('/faceBookLogin/', function () {

    return view('front-end.passwords.updateFbData' ,compact('authUser'));
})->name('faceBookLogin');


//Route::get('/faceBookLogin/{authUser}', ['uses' =>'app@showLoginDataRegister' , 'as' => 'fbRedirect']);

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('auth/facebook', 'FaceBookLoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'FaceBookLoginController@handleProviderCallback');


Route::get('/', function () {
    return view('front-end.index');
})->name('home');

Route::post('/storeQuestions', array(
    'as' => 'store.questions',
    'uses' => 'UserQuestionController@storeQuestions'));



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'] , 'prefix' => '/admin' ], function () {


    Route::get('/', array(
        'as' => 'get.admin.dashboard',
        'uses' => 'Admin\AdminController@dashboard'));

    Route::get('/dashboard', array(
        'as' => 'get.dashboard',
        'uses' => 'Admin\AdminController@dashboard'));


    Route::post('/dashboard', array(
        'as' => 'post.dashboard',
        'uses' => 'Admin\AdminController@dashboard'));


    Route::get('/logout', array(
        'as' => 'logout',
        'uses' => 'AdminAuth\AuthController@logout'));

});


