<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{ $title }}</title>
</head>
<body>
	<div class="container">
		<h1>{{ $title }}</h1>
	
	
		{{ $slot }}
				
	</div>


</body>
</html>