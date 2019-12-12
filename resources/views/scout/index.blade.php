<!DOCTYPE html>
<html>
<head>
	<title>Scout page</title>
</head>
<body>
	<h1>Scout List</h1>
	<a href="/home">Back</a> | 
	<a href="/logout">logout</a>
	
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Scout NAME</td>
			<td>PASSWORD</td>
			<td>Type</td>
			<td>ACTION</td>
		</tr>

	 @foreach($users as $s)
		<tr>
			<td>{{$s->id}}</td>
			<td>{{$s->name}}</td>
			<td>{{$s->password}}</td>
			<td>{{$s->type}}</td>
			
			<td>
				<a href="{{route('scout.edit', $s->id)}}">Edit</a> | 
				<a href="{{route('scout.delete', $s->id)}}">Delete</a> | 
				<a href="{{route('scout.details', $s->id)}}">Details</a>
			</td>
		</tr>
	@endforeach

	</table>

</body>
</html>