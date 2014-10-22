@extends('_master')

@section('title')
Random User Generator
@stop



@section('content')

<h4><a href="/">Return to front page</a></h4>

{{Form::open(array('url' => '/user', 'method' => 'POST'));}}
{{Form::label('users', 'Number of users to generate:');}}
{{Form::selectRange('users', 1, 20);}}<br>
{{Form::submit('Generate Users', array('name' => 'submit'));}}

{{Form::close();}}

<p>
	<?php if(isset($_POST['submit'])){
		for ( $i = 1; $i <= $_POST['users']; $i++){
		echo $faker->name."<br>";
	}}?>
</p>
@stop