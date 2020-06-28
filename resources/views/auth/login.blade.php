@extends('layout.auth_layout')
@section('title', 'Login')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Login</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('action.login')}}" class="needs-validation">
      @csrf

      <div class="form-group">
        <label for="username">Username</label>
        <input id="username" type="text" class="form-control" name="username" value="{{old('username')}}">
        @error('username')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <div class="d-block">
          <label for="password" class="control-label">Password</label>
        </div>
        <div class="position-relative" x-data="{show: false}">
          <input id="password" :type="show ? 'text' : 'password'" class="form-control" name="password" value="{{old('password')}}">
          @error('password')<small class="text-danger">{{ $message }}</small>@enderror
          <i @click="show = !show" x-show="show === false" class="fas fa-eye position-absolute" style="font-size: 18px; bottom: 12px; right: 10px; cursor: pointer;"></i>
          <i @click="show = !show" x-show="show === true" class="fas fa-eye-slash position-absolute" style="font-size: 18px; bottom: 12px; right: 10px; cursor: pointer;"></i>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Login
        </button>
      </div>
    </form>
    <div class="text-muted text-center">
      Don't have an account? <a href="{{route('view.register')}}">Create One</a>
    </div>

  </div>
</div>
@endsection