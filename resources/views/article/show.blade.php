@extends('layout')

@section('html')
<div class="container">
	<h1>{{ $article->title }}</h1>
	<p>{{ $article->description }}</p>
	<small>{{ $article->created_at }}</small>
</div>

@endsection
