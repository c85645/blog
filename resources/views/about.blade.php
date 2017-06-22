<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>About us</h1>
		<ui>
			@foreach ($tasks as $task)
				<li>{{ $task }}</li>
			@endforeach
		</ui>
	</body>
</html>


