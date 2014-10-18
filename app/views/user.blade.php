@extends('_master')

@section('title')
Random User Generator
@stop



@section('content')

<h4><a href="/">Return to front page</a></h4>
	<form action="{{url('user')}}" method="POST">
		{{ Form::token()}}
		<p><label for="users">Number of users to generate:</label>
			<select name="users">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
			</select>
		</p>
		<input type="submit" name="submit" value="Generate Users">
	</form>
	<p><?php if(isset($_POST['submit']))
	{ 
	$faker = Faker\Factory::create();
	for ( $i = 1; $i <= $_POST['users']; $i++){
		echo $faker->name."<br>";
	}}
		?></p>
@stop