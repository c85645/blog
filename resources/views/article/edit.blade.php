@extends('layout')

@section('html')
<div class="container">
	<h1 class="page-header">文章列表</h1>
	<form method="post" action="/article/{{$article->id}}">
		{{-- <input type="hidden" name="_method" value="put"> --}}
		{{ method_field('put') }}
		{{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
		{{ csrf_field() }}
		<h3>標題</h3>
		<input type="text" name="title" value="{{ $article->title }}" class="form-control"><br>
		<h3>內文</h3>
		<textarea name="description" rows="5" class="form-control">{{ $article->description }}</textarea><br>
		<input class="btn btn-primary" type="submit" value="儲存">
	</form>
</div>
@endsection

{{-- <!DOCTYPE html>
<html>
<head>
	<title>更新頁面</title>
</head>
<body>
	<h1>文章列表</h1>
	<form method="post" action="/article/{{$article->id}}">
		<input type="hidden" name="_method" value="put">
		<!-- {{ method_field('put') }} -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<!-- {{ csrf_field() }} -->
		<h3>標題</h3>
		<input type="text" name="title" value="{{ $article->title }}"><br>
		<h3>內文</h3>
		<textarea name="description" rows="5">{{ $article->description }}</textarea><br>
		<input type="submit" value="儲存">
	</form>
</body>
</html> --}}