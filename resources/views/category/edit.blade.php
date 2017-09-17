@extends('layout.master')

@section('html')
<div class="container">
	<h1 class="page-header">分類列表</h1>
	<div class="row">
		<div class="col-xs-offset-4 col-xs-4">
			<form method="post" action="/category/{{$category->id}}">
				{{ method_field('put') }}
				{{ csrf_field() }}
				<h3>分類ID</h3>
				<input type="text" name="id" value="{{ $category->id }}" class="form-control"><br>
				<h3>分類名稱</h3>
				<textarea name="categoryName" rows="5" class="form-control">{{ $category->categoryName }}</textarea><br>
				<input class="btn btn-primary" type="submit" value="儲存">
			</form>
		</div>
	</div>
</div>
@endsection
