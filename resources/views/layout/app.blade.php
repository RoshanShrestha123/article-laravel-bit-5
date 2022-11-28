<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Article App</title>
  @vite(['resources/js/app.js'])
</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('dashboard')}}">Article App</a>
      <div class="d-flex">
        @auth
        <a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
        @endauth

        @guest
        <a href="{{route('login')}}" class="p-2 nav-link">Login</a>
        <a class="p-2 nav-link" href="{{route('register')}}" class="nav-link">Register</a>
        @endguest

      </div>
    </div>
  </nav>
  <!-- dynamic content -->
  @yield('content')

</body>

</html>