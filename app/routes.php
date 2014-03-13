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
Route::resource('مراحل-التصنيع', 'HomeController@production_process');
Route::resource('حقائق-تهمك', 'HomeController@facts');
Route::resource('أسئلة-شائعة', 'HomeController@qa');
Route::resource('طلب-زيارة-المصنع', 'HomeController@visit_request');
Route::resource('صحتك', 'HomeController@ourStory');
Route::resource('اسال-طبيب', 'HomeController@ourStory');
Route::resource('مقالات-التغذية', 'HomeController@ourStory');
Route::resource('مؤشر-الصحة', 'HomeController@ourStory');
Route::resource('الوسائط', 'HomeController@ourStory');
Route::resource('معرض-الصور', 'HomeController@ourStory');
Route::resource('معرض-الفيديو', 'HomeController@ourStory');
Route::resource('العاب', 'HomeController@ourStory');
Route::resource('تطبيقات', 'HomeController@ourStory');
Route::resource('إتصل-بنا', 'HomeController@contactus');
Route::resource('منتجاتنا', 'HomeController@ourStory');


/*======================================================================*/

                               /*visit request*/

/*======================================================================*/

Route::resource('visite_request_submit', 'HomeController@visite_request_submit');
