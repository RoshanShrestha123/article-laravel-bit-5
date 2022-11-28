@extends('layout.app')

@section('content')
<div class="container">
  <h1>Welcome to dashboard</h1>
  <form action="{{route('logout')}}" method="get">
    <button type="submit">Logout</button>
  </form>
</div>
@endsection