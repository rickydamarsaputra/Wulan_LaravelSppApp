@extends('layout.auth_layout')
@section('title', 'Create Student')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Create Student</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{route('action.changestudent', $student->id)}}" class="needs-validation form-change-student">
      @csrf
      @method('put')

      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{$student->name}}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input id="address" type="text" class="form-control" name="address" value="{{$student->address}}">
        @error('address')<small class="text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input id="phone" type="text" class="form-control" name="phone" value="{{$student->phone}}">
        @error('phone')<small class="text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="row">
        <div class="form-group col-6">
          <label for="nisn">Nisn</label>
          <input id="nisn" type="text" class="form-control" name="nisn" value="{{$student->nisn}}">
          @error('nisn')<small class="text-danger">{{ $message }}</small>@enderror
        </div>
        <div class="form-group col-6">
          <label for="nis">Nis</label>
          <input id="nis" type="text" class="form-control" name="nis" value="{{$student->nis}}">
          @error('nis')<small class="text-danger">{{ $message }}</small>@enderror
        </div>
      </div>

      <div class="form-group">
        <label class="d-block">Classrooms</label>
        <select class="form-control select2" name="classroom_id">
          @foreach($classrooms as $classroom)
          @if($classroom->name === $student->classroom->name)
          <option value="{{$classroom->id}}" selected>{{$classroom->name}}</option>
          @else
          <option value="{{$classroom->id}}">{{$classroom->name}}</option>
          @endif
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Change Student
        </button>
      </div>
    </form>
    <div class="text-muted text-center">
      Why Am I Here? <a href="{{route('view.managestudent')}}">Fuck Go Back</a>
    </div>

  </div>
</div>
@endsection