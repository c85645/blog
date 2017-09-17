@extends('layout.master')

@section('html')
<div class="container">
	<h1 class="page-header">文章列表</h1>
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4">
			<form method="post" action="/article">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<h3>標題</h3>
					<input type="text" name="title" class="form-control"><br>
				</div>
				<div class="form-group">
					<h3>內文</h3>
					<textarea name="description" rows="5" class="form-control"></textarea><br>
				</div>
				<input class="btn btn-primary" type="submit" value="儲存">
			</form>
		</div>
	</div>
</div>
@endsection
