@extends('layout.master')

@section('html')
<div class="container">
	<h1 class="page-header">分類列表</h1>
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4">
			<form method="post" action="/category/{{$category->id}}">
				{{ method_field('put') }}
				{{ csrf_field() }}
				<div class="form-group">
					<h3>分類名稱</h3>
					<textarea name="categoryName" rows="5" class="form-control">{{ old('categoryName',$category->categoryName) }}</textarea><br>
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
