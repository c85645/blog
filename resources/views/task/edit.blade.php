@extends('layout')

@section('html')
	<h1>工作列表</h1>
	<form method="post" action="/task/{{$task->id}}">
		{{ method_field('put') }}
		{{ csrf_field() }}
		<h3>標題</h3>
		<input type="text" name="name" value="{{ $task->name }}"><br>
		<h3>內文</h3>
		<textarea name="description" rows="5">{{ $task->description }}</textarea><br>
		<input class="btn btn-primary" type="submit" value="儲存">
	</form>
@endsection