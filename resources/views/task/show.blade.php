@extends('layout')

@section('html')
<div class="container">
	<h1>任務詳項內容</h1>
	<h4>{{ $task->id }}</h1>
	<p>{{ $task->name }}</p>
	<p>{{ $task->description }}</p>
	<p>{{ $task->is_completed }}</p>
	<small>{{ $task->created_at }}</small>
</div>

@endsection
