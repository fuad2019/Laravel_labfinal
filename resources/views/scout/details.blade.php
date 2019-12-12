<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Employer Details</h1>
	<a href="{{route('scout.index')}}">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Name</td>
			<td>{{$std['name']}}</td>
		</tr>


       <tr>
			<td>Email</td>
			<td>{{$std['email']}}</td>
		</tr>


         <tr>
			<td>Contact</td>
			<td>{{$std['contact']}}</td>
		</tr>

		 <tr>
			<td>Type</td>
			<td>{{$std['type']}}</td>
		</tr>



		

	</table>
</body>
</html>