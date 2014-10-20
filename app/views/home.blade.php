@extends ('_master')

@section('title')
Developers Best Friend
@stop

@section('content')

	<p>Below are links to 3 different tools that will help with creating stand-in content for developers.</p>
<h2>Lorem Ipsum Generator</h2>
<p>The first tool is a Lorem Ipsum text generator. Lorem Ipsum is placeholder text usually used by web developers when building websites to show where content will be placed without having to use specific content. The generator will create a number of paragraphs of Lorem Ipsum text based on user's choice.</p> 
	<p><a href="text">Lorem Ipsum Generator</a></p>
<h2>Random User Generator</h2>
	<p>The second generates a number of random user names, much like how the above tool creates paragraphs of text.</p>
	<p><a href="user">Random User Generator</a></p>
<h2>Random Password Generator</h2>
	<p>The third tool is used for generating random passwords. It is a tool inspired by a XKCD comic, which suggests passwords be created using a string of words. The option to include a number or symbol is also included.</p>
	<p><a href="password">Random Password Generator</a></p>
	@stop