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

/*model bindings*/
Route::bind('article', function($value, $route)
{
    return Article::where('aSlug', $value)->firstOrFail();
});
Route::bind('sermon', function($value, $route)
{
    return Sermon::where('srSlug', $value)->firstOrFail();
});
Route::model('schedule','Schedule');



Route::get('/', array('as' => 'home', 'uses' => 'HomeController@show'));

Route::get('/servicetime', array('as' => 'servicetime', 'uses' => 'ScheduleController@showEachDiv'));

//========== ARTICLE =================//

Route::get('/newarticle', function()
{
    return View::make('newarticle');
});	

Route::get('/articles', array('as' => 'articles', 'uses' => 'ArticleController@show'));

Route::get('/articles/{article}',['as' => 'showarticle','uses' => 'ArticleController@showArticle']);

Route::post('/article/insert', 'ArticleController@store');

//============= SERMON ================//

Route::get('/newsermon', function()
{
    return View::make('newsermon');
});	

Route::post('/sermon/insert', 'SermonController@store');

Route::get('/sermons', array('as' => 'sermons', 'uses' => 'SermonController@show'));

Route::get('/sermons/{sermon}',['as' => 'showsermon','uses' => 'SermonController@showSermon']);


//============== EVENT ===================//
Route::get('/newevent', function()
{
    return View::make('newevent');
});	

Route::post('/event/insert', 'UpcomingController@store');


//=============== SCHEDULE ===============//

Route::get('/newschedule', function()
{
    return View::make('newschedule');
});	

Route::post('/schedule/insert', 'ScheduleController@store');

Route::get('/articlelist', function(){

   $articles = Article::where('aType', '=', 4)->get();
   return View::make('articlelist')->with('articlesdata', $articles);

});



// ===============================================
// DIVISION SECTION ==============================
// ===============================================
Route::group(array('prefix' => 'division'), function()
{
	Route::get('{slug}', 'DivisionController@show');

});

// ===============================================
// TEAM SECTION ==================================
// ===============================================
Route::group(array('prefix' => 'team'), function()
{
	Route::get('{slug}', 'TeamController@show');

});


Route::get('/hsol', function()
{
    return View::make('hsol');
});	

Route::get('/vision-mission', function()
{
    return View::make('vm');
});	

Route::get('/our-pastors', function()
{
    return View::make('our-pastors');
});	

Route::get('/our-history', function()
{
    return View::make('history');
});	

Route::get('/deacon', function()
{
    return View::make('deacon');
});	

Route::get('/permata', function()
{
    return View::make('permata');
});	