<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact</h1>
	<form action="{{route('contact')}}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Your Name">
		<input type="text" name="email" placeholder="Your Email">
		<textarea name="message" placeholder="Your Message" cols="30" rows="10"></textarea>
		<button type="submit">Submit</button>
	</form>
</body>
</html>