<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@page {
margin-top:5px;
margin-bottom: 0px;
}
body {
	width: 1056px;
	height: 816px;
  	background-image: url("{{$data->certificate_template}}");
  	background-repeat: no-repeat;
}

.row{
	margin-top: 300px;
}
.name{
	color: white;
	font-size: 60px;
	text-align: center;
}
.date{
	margin-top: 180px;
	margin-left: 210px;
	font-size: 20px;
}
</style>
	<title>Certificate for {{$data->user->name}}</title>
</head>
<body >
	<div class="row">		
		<div class="name">{{$data->user->name}}</div>
		<div class="date">{{$data->date->isoFormat('DD MMM YYYY')}}</div>
	</div>
</body>
</html>