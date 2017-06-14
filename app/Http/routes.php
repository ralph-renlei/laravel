<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Entity\Member;

Route::get('/', function () {
    return view('login');
});

Route::get('/login','View\MemberController@toLogin');
Route::get('/register','View\MemberController@toRegister');

Route::any('/category','View\BookController@toCategory');
Route::any('/product/category_id/{category_id}','View\BookController@toProduct');
Route::any('/product/{product_id}','View\BookController@toPdtContent');

Route::group(['prefix' => 'service'], function () {
    Route::any('validate_code/create', 'Service\ValidateController@create');
    Route::any('validate_phone/send', 'Service\ValidateController@sendSMS');
    Route::any('validate_email', 'Service\ValidateController@validateEmail');
    Route::any('register', 'Service\MemberController@register');;
    Route::post('login', 'Service\MemberController@login');
    Route::get('/category/parent_id/{parent_id}','Service\BookController@getCategoryByParentId');
});
