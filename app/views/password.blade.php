@extends ('_master')

@section('title')
Random Password Generator
@stop


@section('content')
<h4><a href="/">Return to front page</a></h4>
<h3>Use the tool below to generate a random password comprised of multiple words</h3>


{{Form::open(array('url' => '/password', 'method' => 'GET'));}}
{{Form::label('wordcount', 'Number of words to use:');}}
{{Form::selectRange('wordcount', 1, 10, 2);}}</br>
{{Form::label('number', 'Should it include a number?  Yes');}}
<input type="checkbox" name="number" value="include" <?php echo $number_check ; ?> ></br>
{{Form::label('symbol', 'Should it include a symbol?  Yes');}}
<input type="checkbox" name="symbol" value="include" <?php echo $symbol_check ; ?> ></br>
{{Form::submit('Create password', array('name' => 'submit'));}}

{{Form::close();}}</br>
<div class="password"><p>Password:</p><p class="passwordbox"><?php foreach ($password as $value) echo $value;
	?><?php echo $symbol.$number ?></p></div>

<hr>
</br>
<div><p>This password generator is inspired by the comic XKCD. I hope it serves you well.</p><img src="http://imgs.xkcd.com/comics/password_strength.png" width="700px" class="xkcd" alt="Password Strength" /><p><a href="http://xkcd.com/936/">XKCD comic by Randall Munroe</a></p></div>
@stop