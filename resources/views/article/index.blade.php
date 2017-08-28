@extends('layout')

@section('html')

{{-- table-middle的class ">" 連接下一層 直到td 給置中的css  --}}
<style type="text/css">
  .table-middle > tbody > tr > td{
    vertical-align: middle;
  }
  .table-middle > tbody > tr > td > form{
    vertical-align: middle;
  }
</style>

<div class="container">
  <h1 class="page-header">文章列表</h1>
  <div class="row">
    <div class="col-xs-4">
      <a class="btn btn-primary" href="/article/create" role="button"><i class="fa fa-plus"> </i>新增</a>
      <a class="btn btn-default" href="/" role="button"><i class="fa fa-home"></i>回上頁</a>      
    </div>
    <div class="col-xs-offset-4 col-xs-4">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div>

  <table class="table table-bordered table-hover table-middle">
    <thead>
      <th width="20%">編號</th>
      <th width="30%">標題</th>
      <th width="50%">操作</th>
    </thead>
    <tbody>
      @foreach($rows as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>
          <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
        </td>
        <td>
          <form method="post" action="/article/{{ $article->id }}">
            <a class="btn btn-success" href="/article/{{ $article->id }}/edit"><i class="fa fa-pencil"></i>修改</a>
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{-- <input class="btn btn-danger" type="submit" name="" value="刪除"> --}}
            <button class="btn btn-danger" type="submit" name=""><i class="fa fa-trash"> </i>刪除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

{{-- <!DOCTYPE html>
<html>

<head>
  <title>文章列表</title>
</head>

<body>
  <h1>文章列表</h1>
  <a href="/article/create">新增</a>
  <table>
    <thead>
      <th>編號</th>
      <th>標題</th>
      <th>操作</th>
    </thead>
    <tbody>
      @foreach($rows as $article)
      <tr>
        <td>{{ $article->id }}</td>
        <td>
          <a href="/article/{{ $article->id }}">{{ $article->title }}</a>
        </td>
        <td>
          <a href="/article/{{ $article->id }}/edit">修改</a>
          <form method="post" action="/article/{{ $article->id }}">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" name="" value="刪除">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>
 --}}