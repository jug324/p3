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

Route::get('/password', function()
{
	@include('banks.php');
if(isset($_GET['wordcount']) && ($_GET['wordcount'] >= 1 && $_GET['wordcount'] <=10)) {$wordnumber = $_GET['wordcount'];}
else { $wordnumber ='2';}

$password = array_rand($wordbank, $wordnumber);

if(isset($_GET['number']) && ($_GET['number'] === 'include')) {$number = rand(0, 9);}
else{ $number ='';}

if(isset($_GET['symbol']) && ($_GET['symbol'] === 'include')) {$symbol = array_rand($symbolbank, 1);}
else{ $symbol ='';}

if(isset($_GET['number']) && ($_GET['number'] === 'include')) {$number_check = 'checked="checked"' ;}
else {$number_check = '';}

if(isset($_GET['symbol']) && ($_GET['symbol'] === 'include')) {$symbol_check = 'checked="checked"' ;}
else {$symbol_check = '';}


	return View::make('password')
		->with('number_check', $number_check)
		->with('symbol_check', $symbol_check)
		->with('wordnumber', $wordnumber)
		->with('password', $password)
		->with('wordbank', $wordbank)
		->with('number', $number)
		->with('symbol', $symbol);
});