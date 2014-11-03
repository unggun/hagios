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
Route::bind('upcoming', function($value, $route)
{
    return Upcoming::where('uSlug', $value)->firstOrFail();
});
Route::model('schedule', 'Schedule');


Route::get('/', array('as' => 'home', 'uses' => 'HomeController@show'));

Route::get('/servicetime', array('as' => 'servicetime', 'uses' => 'ScheduleController@showEachDiv'));

Route::get('/admin/dashboard', array('as' => 'dashboard', function()
{
    return View::make('dashboard');
}));	

//========== ARTICLE =================//

Route::get('/newarticle', array('as' => 'newarticle', function()
{
    return View::make('newarticle');
}));	

Route::get('/articles/list', array('as' => 'articleslist', 'uses' => 'ArticleController@showList'));

Route::get('/articles', array('as' => 'articles', 'uses' => 'ArticleController@show'));

Route::get('/articles/{article}',['as' => 'showarticle','uses' => 'ArticleController@showArticle']);

Route::get('/articles/{article}/edit',['as' => 'article-edit','uses' => 'ArticleController@edit']);

Route::post('/article/insert', 'ArticleController@store');

Route::post('/article/{article}/update', ['as' => 'article-update','uses' => 'ArticleController@update']);

Route::get('/article/{article}/delete', ['as' => 'article-delete','uses' => 'ArticleController@delete']);

//============= SERMON ================//

Route::get('/newsermon', array('as' => 'newsermon', function()
{
    return View::make('newsermon');
}));	

Route::post('/sermon/insert', 'SermonController@store');

Route::get('/sermons', array('as' => 'sermons', 'uses' => 'SermonController@show'));

Route::get('/sermon/list', array('as' => 'sermonslist', 'uses' => 'SermonController@showList'));

Route::get('/sermons/{sermon}',['as' => 'showsermon','uses' => 'SermonController@showSermon']);

Route::get('/sermons/{sermon}/edit',['as' => 'sermon-edit','uses' => 'SermonController@edit']);

Route::post('/sermon/{sermon}/update', ['as' => 'sermon-update','uses' => 'SermonController@update']);

Route::get('/sermon/{sermon}/delete', ['as' => 'sermon-delete','uses' => 'SermonController@delete']);


//============== EVENT ===================//
Route::get('/newevent', array('as' => 'newevent', function()
{
    return View::make('newevent');
}));	

Route::post('/event/insert', 'UpcomingController@store');

Route::get('/event/list', array('as' => 'eventslist', 'uses' => 'UpcomingController@showList'));

Route::get('/event/{upcoming}/edit',['as' => 'event-edit','uses' => 'UpcomingController@edit']);

Route::post('/event/{upcoming}/update', ['as' => 'event-update','uses' => 'UpcomingController@update']);

Route::get('/event/{upcoming}/delete', ['as' => 'event-delete','uses' => 'UpcomingController@delete']);


//=============== SCHEDULE ===============//

Route::get('/newschedule', array('as' => 'newschedule', function()
{
    return View::make('newschedule');
}));	

Route::post('/schedule/insert', 'ScheduleController@store');

Route::get('/schedule/list', array('as' => 'scheduleslist', 'uses' => 'ScheduleController@showList'));

Route::get('/schedule/{schedule}/edit',['as' => 'schedule-edit','uses' => 'ScheduleController@edit']);

Route::post('/schedule/{schedule}/update', ['as' => 'schedule-update','uses' => 'ScheduleController@update']);

Route::get('/schedule/{schedule}/delete', ['as' => 'schedule-delete','uses' => 'ScheduleController@delete']);


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