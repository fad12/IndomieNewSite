<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
protected $layout = 'layouts.master';

	public function index()
	{
        $data = array(
        "pageTitle"=>"إندومي السعودية",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('layouts.homepage')->with($data);
	}


public function ourStory()
	{
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.ourstory')->with($data);
	}


public function certificate()
	{

        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.certificate')->with($data);
	}

	public function factories()
	{
		
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.factory')->with($data);
	}

public function qa()
	{
		
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.qa')->with($data);
	}



















}