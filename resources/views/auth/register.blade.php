@extends('layout.auth_layout')
@section('title', 'Register')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Register</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('action.register')}}" class="needs-validation">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

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
          Register
        </button>
      </div>
    </form>
    <div class="mb-4 text-muted text-center">
      I Have Account For <a href="{{route('view.login')}}">Login!</a>
    </div>

  </div>
</div>
@endsection