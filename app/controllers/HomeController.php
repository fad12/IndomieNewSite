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

public function production_process()
	{
		
        
		return  Redirect::to('http://indomie.com.sa/pp2');;
	}

public function facts()
	{
		
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.facts')->with($data);
	}

public function visit_request()
	{
		
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.visit_request')->with($data);
	}


	public function contactus()
	{
		
        $data = array(
        "pageTitle"=>"إندومي السعودية | حكايتنا",
        "keyWords"=> array("اندومي","إندومي"),
        "Description"=>"-----------------------------"
        );
		return View::make('ar.contactus')->with($data);
	}



public function visite_request_submit(){
		$input = Input::all();
		
   
   $rules = array(
        'title' => 'required',
        'position' => 'required',
        'email' => 'required',
        'mobile' => 'required|Numeric|min:7',
        'visit_date' => 'required',
        'visit_date_2' => 'required',
        'visit_type' => 'required',
        'visitors_numper' => 'required',
    
);
		$validator = Validator::make($input, $rules);

    if ($validator->fails())
    {
        return Redirect::to('طلب-زيارة-المصنع')->withErrors($validator);
    }else{

    	DB::table('visit_request')->insert(
    array(
    	'title'           => Input::get('title'),
    	'position'        => Input::get('position'),
    	'email'           => Input::get('email'),
    	'mobile'          => Input::get('mobile'),
    	'visit_date'      => Input::get('visit_date'),
    	'visit_date_2'    => Input::get('visit_date_2'),
    	'visit_type'      => Input::get('visit_type'),
    	'visitors_numper' => Input::get('visitors_numper'),
    	'note'            => Input::get('note'),
    	)
);
    return Redirect::to('طلب-زيارة-المصنع')->withInput()->with('success', 'تم إستلام طلبك و سيتم التواصل معكم في أقرب وقت ممكن');

    }
		
       
        
	}


















}