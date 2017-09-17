@extends('layout.master')

@section('html')
<div class="container">
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4"><h1>文章詳細內容</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><h1>{{ $article->title }}</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><p>{{ $article->description }}</p></div>
		<div class="col-xs-offset-4 col-xs-4"><small>{{ $article->created_at }}</small></div>
	</div>
</div>
@endsection
