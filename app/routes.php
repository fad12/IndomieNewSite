<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'HomeController@index');//Home Page AR
Route::resource('الرئيسية', 'HomeController@index');//Home Page AR
Route::resource('حكايتنا', 'HomeController@ourStory');//Our Story Page AR
Route::resource('مصانع-إندومي', 'HomeController@factories');
Route::resource('شهادات-الجودة', 'HomeController@certificate');
Route::resource('إسمع-منا', 'HomeController@ourStory');
Route::resource('مراحل-التصنيع', 'HomeController@ourStory');
Route::resource('حقائق-تهمك', 'HomeController@ourStory');
Route::resource('هل-تعمل', 'HomeController@qa');
Route::resource('طلب-زيارة-المصنع', 'HomeController@ourStory');
Route::resource('صحتك', 'HomeController@ourStory');
Route::resource('اسال-طبيب', 'HomeController@ourStory');
Route::resource('مقالات-التغذية', 'HomeController@ourStory');
Route::resource('مؤشر-الصحة', 'HomeController@ourStory');
Route::resource('الوسائط', 'HomeController@ourStory');
Route::resource('معرض-الصور', 'HomeController@ourStory');
Route::resource('معرض-الفيديو', 'HomeController@ourStory');
Route::resource('العاب', 'HomeController@ourStory');
Route::resource('تطبيقات', 'HomeController@ourStory');
Route::resource('إتصل-بنا', 'HomeController@ourStory');
Route::resource('منتجاتنا', 'HomeController@ourStory');


