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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function show(){
		$schedules = Schedule::where('sSvId', 0)
   						->whereRaw('sTime >= NOW()')
   						->orderBy('sTime')
   						->limit(2)
   						->get();

   		$articles = Article::orderBy('created_at', 'DESC')
   							->first();

   		$sermon = Sermon::orderBy('created_at', 'DESC')
   						->first();

   		return View::make('home')->with('schedulesdata', $schedules)
   								->with('articledata', $articles)
   								->with('sermondata',$sermon);
	}

}
