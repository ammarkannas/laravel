<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Signing in routes.
|--------------------------------------------------------------------------
| names : {signin:GET|POST}
*/
Route::get('signin', 'LoginController@showLoginForm')->name('signin');
Route::post('signin', 'LoginController@login');

/*
|--------------------------------------------------------------------------
| Signing out routes.
|--------------------------------------------------------------------------
| names : {signout:POST}
*/
Route::post('signout', 'LoginController@logout')->name('signout');

/*
|--------------------------------------------------------------------------
| Signing up routes.
|--------------------------------------------------------------------------
| names : {signup:GET|POST}
*/
Route::get('signup', 'RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'RegisterController@register');


/*
|--------------------------------------------------------------------------
| Password reset routes.
|--------------------------------------------------------------------------
| names : {password.request:GET},
|         {password.email:POST},
|         {password.reset:GET},
|         {password.update:POST},
|         {password.confirm:GET|POST}
*/
Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
Route::get('password/confirm', 'ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'ConfirmPasswordController@confirm');


/*
|--------------------------------------------------------------------------
| Email verify routes.
|--------------------------------------------------------------------------
| names : {verification.notice:GET},
|         {verification.verify:GET},
|         {verification.resend:POST}
*/
Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
Route::post('email/resend', 'VerificationController@resend')->name('verification.resend');
