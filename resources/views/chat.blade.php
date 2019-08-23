<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="row" id="app">
			<h1>Chat Room</h1>
		</div>
	</div>


	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>