<!DOCTYPE html>
<html>

<head>
  <title>Stream Workshop</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <!-- table-middle的class ">" 連接下一層 直到td 給置中的css -->
  <style type="text/css">
    .table-middle > tbody > tr > td{
      vertical-align: middle;
    }
    .table-middle > tbody > tr > td > form{
      vertical-align: middle;
    }
  </style>
</head>

<body>
  @include('layout.nav')
  @yield('html')
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <script>
    $.get('/thankGod.txt', function (response) {
      console.log(response);
    })
  </script>
  @yield('javascript')
</body>

</html>
