@extends('layout')

@section('html')
<div class="container">
	<h1 class="page-header">文章列表</h1>
		<form class="" method="post" action="/article">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<h3>標題</h3>
				<input type="text" name="title" class="form-control"><br>
			</div>
			<div class="form-group">
				<h3>內文</h3>
				<textarea name="description" rows="5" class="form-control"></textarea><br>
			</div>
			<input class="btn btn-primary" type="submit" value="儲存">
		</form>
	</div>
</div>
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