@extends('layout')

@section('html')
<div class="container">
	<h1>工作列表</h1>
		<form class="" method="post" action="/task">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<h3>工作名稱</h3>
				<input type="text" name="name"><br>
			</div>
			<div class="form-group">
				<h3>工作內容</h3>
				<textarea name="description" rows="5"></textarea><br>
			</div>
			<input class="btn btn-primary" type="submit" value="儲存">
		</form>
	</div>
</div>
@endsection