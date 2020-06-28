@extends('layout.auth_layout')
@section('title', 'Change Class')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Change Class</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('action.changeclass', $class->id)}}" class="needs-validation form-change-class">
      @csrf
      @method('put')

      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{$class->name}}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <div class="d-block">
          <label for="competence" class="control-label">Competence</label>
        </div>
        <input id="competence" type="text" class="form-control" name="competence" value="{{$class->competence}}">
        @error('competence')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Change Class
        </button>
      </div>
    </form>
    <div class="text-muted text-center">
      Why Am I Here? <a href="{{route('view.manageclass')}}">Fuck Go Back</a>
    </div>

  </div>
</div>
@endsection