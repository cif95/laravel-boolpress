<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Contact</title>
</head>
<body>
	<main>
		<section class="container-fluid p-5">
			<div class="row">
				<div class="col-5 mx-auto p-5">
					<h2>Send us a message:</h2>
					<form action="{{ route('guest.storeContact')}}" method="post" class="d-flex flex-column py-3">
						@csrf
						@method('POST')
							<label for="guest_email">Email address:</label>
							<input type="text" placeholder="type your email address.." name="guest_email" class="form-control mb-4">

							<label for="guest_name">Name:</label>
							<input type="text" placeholder="type your full name.." name="guest_name" class="form-control mb-4">

							<label for="guest_emailTitle">Title:</label>
							<input type="text" placeholder="type your message title.." name="guest_emailTitle" class="form-control mb-4">

							<label for="guest_message">Message:</label>
							<textarea type="text" placeholder="type your message.." name="guest_message" class="form-control mb-4"></textarea>

							<button class="btn btn-primary w-25 mx-auto" type="submit">Send message</button>
					</form>
				</div>
			</div>
		</section>
	</main>
</body>
</html>