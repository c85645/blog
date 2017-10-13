<!DOCTYPE html>
<html>
<head>
  @include('layout.head')
  <style type="text/css">
    .spacer {
      padding-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="spacer"></div>
    <div class="row">
      <div class="col-xs-offset-4 col-xs-4">
        <form class="jumbotron" method="post" action="/register">
          <div class="text-center">
            <div class="page-header">新會員註冊</div>
          </div>

          {{ csrf_field() }}
          <div class="form-group">
            <h3>UserName:</h3>
            <input type="text" name="name" class="form-control">
          </div>

          <div class="form-group">
            <h3>Email:</h3>
            <input type="text" name="email" class="form-control">
          </div>

          <div class="form-group">
            <h3>Password:</h3>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary" value="註冊">
          </div>

          @include('layout.errors')
        </form>
      </div>
    </div>
  </div>
</body>
</html>
