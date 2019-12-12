<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome Home! {{session('name')}}</h1>

		 <a href="{{route('scout.add')}}">Add Scouts</a> | 
	<a href="{{route('scout.index')}}">ScoutList</a>  | 
	



    <a href="{{route('guser.add')}}">Add General User</a> | 
	<a href="{{route('guser.index')}}">General User List</a> |

	
	<a href="/logout">logout</a>

	

</body>
</html>