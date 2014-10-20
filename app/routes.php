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

Route::get('/', function()
{
	return View::make('home');
});

Route::get('text', function()
{
 return View::make('text');
});


Route::post('text', function()
{

$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($_POST['count']);


 return View::make('text')
 		->with('paragraphs', $paragraphs);


});

Route::get('/user', function()
{
	
 return View::make('user');

	

});

Route::post('/user', function()
{
	$faker = Faker\Factory::create();
 return View::make('user')
 	->with('faker', $faker);

	

});