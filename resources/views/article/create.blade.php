@extends('layout')

@section('html')
<h1>文章列表</h1>
<form method="post" action="/article">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<h3>標題</h3>
	<input type="text" name="title"><br>
	<h3>內文</h3>
	<textarea name="description" rows="5"></textarea><br>
	<input type="submit" value="儲存">
</form>
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
	<title>新增頁面</title>
</head>
<body>
<h1>文章列表</h1>
<form method="post" action="/article">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<h3>標題</h3>
	<input type="text" name="title"><br>
	<h3>內文</h3>
	<textarea name="description" rows="5"></textarea><br>
	<input type="submit" value="儲存">
</form>
</body>
</html> --}}