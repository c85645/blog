@extends('layout.master')

@section('html')
<div class="container">
	<h1 class="page-header">工作列表</h1>
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4">
			<form method="post" action="/task/{{$task->id}}">
				{{ method_field('put') }}
				{{ csrf_field() }}
				<div class="form-group">
					<h3>工作名稱</h3>
					<input type="text" name="name" value="{{ $task->name }}" class="form-control"><br>
				</div>
				<div class="form-group">
					<h3>工作內容</h3>
					<textarea name="description" rows="5" class="form-control">{{ $task->description }}</textarea><br>
				</div>
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="儲存">
				</div>
				@include('layout.errors')
			</form>
		</div>
	</div>
</div>
@endsection
