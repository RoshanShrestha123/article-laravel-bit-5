@extends('layout.app')

@section('content')
<div class="container">

  <form action="{{route('logout')}}" method="get">
    <button type="submit">Logout</button>
  </form>

  <table class="table">
    <thead>
      <th>Article Title</th>
      <th>Created By</th>
    </thead>

    <tbody>
      @foreach($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->user->name}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection