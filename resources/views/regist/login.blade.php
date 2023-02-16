@extends('layouts.regist')

@section('form')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Hollaa</strong> {{ session('success') }}
</div>
@endif

@if(session()->has('loginError'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ups!</strong> {{ session('loginError') }}
</div>
@endif

<form action="/login" method="post">
  @csrf
  <img class="mb-4 rounded-circle" src="https://i.ibb.co/zbHQXnH/agtslogo.png" width="72" height="">
  <h1 class="h3 mb-3 fw-normal">Log In</h1>

  <div class="form-floating">
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" autofocus>
    <label for="email">Email address</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
    <label for="password">Password</label>
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button class="w-100 btn btn-lg btn-dark" type="submit">Log In</button>

  <p class="mt-5 mb-3 text-muted">&copy; 2023, Ahmad Khoirul Umam, Inc</p>
</form>

@endsection