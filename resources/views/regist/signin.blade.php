@extends('layouts.regist')

@section('form')

<form action="/signin" method="post">
  @csrf
  <img class="mb-4 rounded-circle" src="https://i.ibb.co/zbHQXnH/agtslogo.png" width="72">
  <h1 class="h3 mb-3 fw-normal">Sign In</h1>

  <div class="form-floating">
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" autofocus>
    <label for="name">Name</label>
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
    <label for="email">Email address</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <select class="form-select form-controll" name="auth" id="auth">
      <option value="alumni">Alumni</option>
      <option value="ika">IKA</option>
    </select>
    <label for="auth">Sign As</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
    <label for="password">Password</label>
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="token" class="form-control @error('token') is-invalid @enderror" id="token" name="token" value="{{ old('token') }}">
    <label for="token">Token</label>
    @error('token')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Syarat & Ketentuan
    </label>
  </div>

  <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>

  <p class="mt-5 mb-3 text-muted">&copy; 2023, Ahmad Khoirul Umam, Inc</p>
</form>

@endsection