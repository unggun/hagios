<?php

/*
|--------------------------------------------------------------------------
| Register The Laravel Class Loader
|--------------------------------------------------------------------------
|
| In addition to using Composer, you may use the Laravel class loader to
| load your controllers and models. This is useful for keeping all of
| your classes in the "global" namespace without Composer updating.
|
*/

ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',

));

/*
|--------------------------------------------------------------------------
| Application Error Logger
|--------------------------------------------------------------------------
|
| Here we will configure the error logger setup for the application which
| is built on top of the wonderful Monolog library. By default we will
| build a basic log file setup which creates a single file for logs.
|
*/

Log::useFiles(storage_path().'/logs/laravel.log');

/*
|--------------------------------------------------------------------------
| Application Error Handler
|--------------------------------------------------------------------------
|
| Here you may handle any errors that occur in your application, including
| logging them or displaying custom views for specific errors. You may
| even register several error handlers to handle different types of
| exceptions. If nothing is returned, the default error view is
| shown, which includes a detailed stack trace during debug.
|
*/

App::error(function(Exception $exception, $code)
{
	Log::error($exception);
});

/*
|--------------------------------------------------------------------------
| Maintenance Mode Handler
|--------------------------------------------------------------------------
|
| The "down" Artisan command gives you the ability to put an application
| into maintenance mode. Here, you will define what is displayed back
| to the user if maintenance mode is in effect for the application.
|
*/

App::down(function()
{
	return Response::make("Be right back!", 503);
});

/*
|--------------------------------------------------------------------------
| Require The Filters File
|--------------------------------------------------------------------------
|
| Next we will load the filters file for the application. This gives us
| a nice separate location to store our route and application filter
| definitions instead of putting them all in the main routes file.
|
*/

require app_path().'/filters.php';



/*custom macro

/**
 * Date input - http://www.w3.org/TR/html-markup/input.date.html
 *
 * The input element with a type attribute whose value is "date" represents a control for setting the
 * element’s value to a string representing a date.
 *
 * Value - A valid full-date as defined in [RFC 3339], with the additional qualification
 *   that the year component is four or more digits representing a number greater than 0.
 */
Form::macro('date', function($name, $default = NULL, $attrs = array())
{
  $item = '<input type="date" name="'. $name .'" ';
 
  if ($default) {
    $item .= 'value="'. $default .'" ';
  }
 
  if (is_array($attrs)) {
    foreach ($attrs as $a => $v)
      $item .= $a .'="'. $v .'" ';
  }
  $item .= ">";
 
  return $item;
});
 
 
/**
 * Datetime input - http://www.w3.org/TR/html-markup/input.datetime.html
 *
 * The input element with a type attribute whose value is "datetime" represents a control
 * for setting the element’s value to a string representing a global date and time (with
 * timezone information).
 *
 * Value - A valid date-time as defined in [RFC 3339], with these additional qualifications:
 *  1. The literal letters T and Z in the date/time syntax must always be uppercase
 *  2. The date-fullyear production is instead defined as four or more digits representing a
 *     number greater than 0
 */
Form::macro('datetime', function($name, $default = NULL, $attrs = array())
{
  $item = '<input type="datetime" name="'. $name .'" ';
 
  if ($default) {
    $item .= 'value="'. $default .'" ';
  }
 
  if (is_array($attrs)) {
    foreach ($attrs as $a => $v)
      $item .= $a .'="'. $v .'" ';
  }
  $item .= ">";
 
  return $item;
});