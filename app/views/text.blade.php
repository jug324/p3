@extends ('_master')

@section('title')
Lorem Ipsum Text Generator
@stop


@section('content')
	<h4><a href="/">Return to front page</a></h4>

{{Form::open(array('url' => '/text', 'method' => 'POST'));}}
{{Form::label('count', 'Number of paragraphs to generate:');}}
{{Form::selectRange('count', 1, 20);}}<br>
{{Form::submit('Generate Text', array('name' => 'submit'));}}

{{Form::close();}}

<p><?php if(isset($_POST['submit'])) {echo implode('<p>', $paragraphs);} ?> </p>
@stop