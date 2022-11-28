@extends('layout.app')

@section('content')
<div class="container">
  <form method="post" action="{{route('registerUser')}}">
    @csrf
    <h1>Register here</h1>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
        aria-describedby="name">
      @error('name')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
        id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection