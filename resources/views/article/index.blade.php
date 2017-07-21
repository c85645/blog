@extends('layout')

@section('html')
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