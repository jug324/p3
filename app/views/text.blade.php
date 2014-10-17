@extends ('_master')

@section('title')
Lorem Ipsum Text Generator
@stop


@section('content')
	<h4><a href="/">Return to front page</a></h4>
	<form action="{{url('text')}}" method="POST">
		<label for="count">Number of paragraphs to generate:</label>
			<select name="count">
				<option value="1" >1</option>
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
		
		<input type="submit" name="submit" value="Generate Text">
	</form>

<p><?php if(isset($_POST['submit'])) {
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs($_POST['count']);
echo implode('<p>', $paragraphs);}

 ?> </p>
@stop