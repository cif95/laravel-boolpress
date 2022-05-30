<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Mail from Boolpress</title>
</head>
<body>
	
	<section id="email-body" class="container-fluid">
		<div class="row">
			<div class="col-12">
				<p class="fst-italic">Message from {{$author}} via Boolpress: </p>
				<h4>{{$title}}</h4>
				<p>{{$content}}</p>
			</div>
		</div>
	</section>

</body>
</html>