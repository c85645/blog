@extends('layout')

@section('html')
	<h1>{{ $article->title }}</h1>
	<p>{{ $article->description }}</p>
	<small>{{ $article->created_at }}</small>
@endsection
