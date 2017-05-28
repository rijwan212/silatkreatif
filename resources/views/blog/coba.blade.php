
<h1> Create BLog Post </h1>

<form class="" action="/blog" method="post">
	<input type="text" name="title" value="" placeholder="judul"><br>
	<textarea name="subject" rows="8" cols="40" placeholder="isi .."> </textarea>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
	

</form>