@extends('layout.master')

@section('html')
<div class="container">
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4"><h1>任務詳項內容</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><h4>{{ $task->id }}</h1></div>
		<div class="col-xs-offset-4 col-xs-4"><p>{{ $task->name }}</p></div>
		<div class="col-xs-offset-4 col-xs-4"><p>{{ $task->description }}</p></div>
		<div class="col-xs-offset-4 col-xs-4"><small>{{ $task->created_at }}</small></div>
	</div>
</div>
@endsection
