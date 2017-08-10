@extends('layout')

@section('html')
<div class="container">
  <h1>工作列表</h1>
  <a class="btn btn-primary" href="/task/create" role="button"><i class="fa fa-plus"></i>新增</a>
  <a class="btn btn-default" href="/" role="button"><i class="fa fa-home"></i>回上頁</a>
  <table class="table table-bordered table-hover">
    <thead>
      <th width="20%">編號</th>
      <th width="30%">標題</th>
      <th width="50%">操作</th>
    </thead>
    <tbody>
      @foreach($rows as $task)
      <tr>
        <td>{{ $task->id }}</td>
        <td>
          <a href="/task/{{ $task->id }}">{{ $task->name }}</a>
        </td>
        <td>
          <form class="form-inline" method="post" action="/task/{{ $task->id }}">
            <a class="btn btn-success" href="/task/{{ $task->id }}/edit"><i class="fa fa-pencil"> </i>修改</a>
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger" type="submit" name=""><i class="fa fa-trash"></i>刪除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection