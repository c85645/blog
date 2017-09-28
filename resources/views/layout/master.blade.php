<!DOCTYPE html>
<html>

<head>
  @include('layout.head')
</head>

<body>
  @include('layout.nav')
  @yield('html')
  @include('layout.script')
  @yield('javascript')
</body>

</html>
