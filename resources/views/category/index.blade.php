@extends('layout.master')

@section('html')
<div class="container">
  <h1 class="page-header">分類列表</h1>
  <div class="row">
    <div class="col-xs-4">
      <a class="btn btn-primary" href="/category/create" role="button"><i class="fa fa-plus"> </i>新增</a>
      <a class="btn btn-default" href="/" role="button"><i class="fa fa-home"></i>回上頁</a>
    </div>
    <div class="col-xs-offset-4 col-xs-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="請輸入分類名稱...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </div>
  </div>

  <table class="table table-bordered table-hover table-middle">
    <thead>
      <th width="20%">分類ID</th>
      <th width="30%">分類名稱</th>
      <th width="50%">操作</th>
    </thead>
    <tbody>
      @foreach($rows as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>
          <a href="/category/{{ $category->id }}">{{ $category->categoryName }}</a>
        </td>
        <td>
          <form method="post" action="/category/{{ $category->id }}">
            <a class="btn btn-success" href="/category/{{ $category->id }}/edit"><i class="fa fa-pencil"></i>修改</a>
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger" type="submit" name=""><i class="fa fa-trash"> </i>刪除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
