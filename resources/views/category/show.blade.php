@extends('layout')

@section('html')
<div class="container">
	<h1>分類</h1>
	<h4>{{ $category->id }}</h1>
	<p>{{ $category->categoryName }}</p>
	<small>{{ $category->created_at }}</small>
	<small>{{ $category->created_at }}</small>
</div>
@endsection
