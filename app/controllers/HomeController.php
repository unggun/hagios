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

	public function __construct()
    {
        //updated: prevents re-login.
        $this->beforeFilter('guest',['only' => ['doLogin']]);
        $this->beforeFilter('auth',['only' => ['doLogout']]);
    }

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

   		$upcomings = Upcoming::whereRaw('uExpire_at >= NOW()')
   						->orderBy('uExpire_at')
   						->limit(3)
   						->get();

   		return View::make('home')->with('schedulesdata', $schedules)
   								->with('articledata', $articles)
   								->with('sermondata',$sermon)
   								->with('eventsdata',$upcomings);
	}

	public function showLogin()
	{
		// show the form
		if(!Auth::check()){
			return View::make('login');
		}
		else {
			return Redirect::route('dashboard');
		}
	}

	public function doLogin()
	{
		$rules = array(
			'username'    => 'required', // make sure the email is an actual email
			'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::route('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				return Redirect::route('dashboard');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::route('login');

			}

		}
	}

	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::route('login'); // redirect the user to the login screen
	}
}
