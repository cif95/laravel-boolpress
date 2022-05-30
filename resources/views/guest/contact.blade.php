<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact</title>
</head>
<body>
	<main>
		<section class="container-fluid">
			<div class="row">
				<div class="col-5 mx-auto">
					<h2>Send a message:</h2>
					<form action="{{ route('guest.storeContact')}}" method="post">
						@csrf
						@method('POST')
						<input type="text" placeholder="type your email address.." name="guest_email">
						<input type="text" placeholder="type your full name.." name="guest_name">
						<input type="text" placeholder="type your message title.." name="guest_emailTitle">
						<textarea type="text" placeholder="type your message.." name="guest_message"></textarea>
						<button type="submit">Send message</button>
					</form>
				</div>
			</div>
		</section>
	</main>
</body>
</html>