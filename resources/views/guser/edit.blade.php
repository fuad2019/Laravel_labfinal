<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Edit Scout</h1>
	<a href="{{route('scout.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<form method="post">
	<table border="1">
		<tr>
			<td> Name</td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		<tr>


      <tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{$std['email']}}"></td>
		</tr>
		



       <tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{$std['contact']}}"></td>
		</tr>
		


      

 


        <tr>

			<td>PASSWORD</td>
			<td><input type="text" name="password" value="{{$std['password']}}"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="update"></td>
			<td></td>
		</tr>
	</table>
</form>

</body>
</html>