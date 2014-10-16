<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title", "Developer's Best Friend")</title>
	<link rel="stylesheet" href="p3styles.css" type="text/css"/>
	@yield ('head')
</head>
<body id="container">
	<h1>@yield("title", "Developer's Best Friend")</h1>
	@yield('content')

</body>
</html>