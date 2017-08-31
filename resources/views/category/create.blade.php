@extends('layout')

@section('html')
<div class="container">
	<h1 class="page-header">分類列表</h1>
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4">
			<form method="post" action="/category">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<h3>分類名稱</h3>
					<textarea name="categoryName" rows="5" class="form-control"></textarea><br>
				</div>
				<input class="btn btn-primary" type="submit" value="儲存">
			</form>
		</div>
	</div>
</div>
@endsection