@extends('layout.master')

@section('html')
<div class="container">
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4"><h1>分類詳細內容</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><h4>{{ $category->id }}</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><p>{{ $category->categoryName }}</p></div>
		<div class="col-xs-offset-4 col-xs-4"><small>{{ $category->created_at }}</small></div>
	</div>
</div>
@endsection
