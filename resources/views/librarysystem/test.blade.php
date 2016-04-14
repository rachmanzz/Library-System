<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@foreach($student as $s)
	<p>{{$s->book_id}}</p>
@endforeach
</body>
</html>