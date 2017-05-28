<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>

<form action="store" method="POST">
	<label for="name"> Name </label>
	<input type="text" name="name" id="name"> <br/>
	<label for="email">Email</label>
	<input type="email" name="email" id="email"> <br/>
	<label for="password">Password</label>
	<input type="password" name="password" id="password"> <br/>
	<label for="mobile">Mobile</label>
	<input type="tel" name="mobile" id="mobile"> <br/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="submit" id="submit">
</form>

</body>
</html>